<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Services,Team,News,Testimonial,Blog,Newsletter,ContactUs,Job};
use Validator;
use Auth;
use Str;
use Schema;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use Share;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Mail;
use Twilio\Rest\Client as TwilioClient;

class HomeController extends Controller
{
   public function index()
    {
        $data['stock'] = $this->getStockData();
        // dd($data['stock']);
        
     $client = new Client();

$response = $client->get('https://api.marketaux.com/v1/news/all?symbols=TSLA%2CAMZN%2CMSFT&filter_entities=true&language=en&api_token=rXvSUzMvLTLqHxPPOJPpKBKgXqMD0w19fVU8lIaN', [
    'headers' => [
        'Content-Type' => 'application/json',
    ],
    
]);

      $data['title'] = 'Home';
      $data['newsApi'] = json_decode($response->getBody()->getContents());
      $data['number'] = rand(0,(count($data['newsApi']->data)-1));
      $data['services'] = Services::where(['active_status'=>1,'is_deleted'=>0])->orderBy('id','DESC')->get();
      $data['news'] = News::where(['active_status'=>1,'is_deleted'=>0])->orderBy('id','DESC')->limit(1)->first();
      $data['testimonial'] = Testimonial::where(['active_status'=>1,'is_deleted'=>0])->orderBy('id','DESC')->get();
      
      return view('frontend.home',$data);
      
    }//end of method

    public function getStockData()
    {
        // Replace 'YOUR_API_KEY' with your actual Alpha Vantage API key
        $api_key = 'NZLLNJEDLLPJRVGA';

        // Replace 'AAPL' with the desired stock symbol
        $stock_symbol = 'TIME_SERIES_MONTHLY';

        $client = new Client();

        try {
            $url = "https://www.alphavantage.co/query?function=NEWS_SENTIMENT&tickers=AAPL&apikey=NZLLNJEDLLPJRVGA";
            // $url = "https://www.alphavantage.co/query?function=TIME_SERIES_MONTHLY&symbol=IBM&apikey=NZLLNJEDLLPJRVGA";
            // $url = "https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol={$stock_symbol}.NS&apikey={$api_key}";
            $response = $client->get($url);

            $data = json_decode($response->getBody(), true);
            return $data['feed'][0]['ticker_sentiment'];

            // Access the desired data points
            // $stock_price = $data['Global Quote']['05. price'];
            // $stock_volume = $data['Global Quote']['06. volume'];

            // // Do something with the stock price and volume (e.g., return as JSON response)
            // return response()->json([
            //     'stock_price' => $stock_price,
            //     'stock_volume' => $stock_volume,
            // ]);
        } catch (\Exception $e) {
            // Handle any errors that may occur during the API request
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    public function aboutus()
    {
        
      $data['title'] = 'About-us';
      $data['coreTeam'] = Team::where(['active_status'=>1,'is_deleted'=>0,'teamType'=>1])->orderBy('id','DESC')->get();
      $data['otherTeam'] = Team::where(['active_status'=>1,'is_deleted'=>0,'teamType'=>2])->orderBy('id','DESC')->get();
      
      return view('frontend.aboutUs',$data);
    }//end of method

    public function contactus()
    {
        
      $data['title'] = 'Contact-us';
      
      return view('frontend.contactUs',$data);
    }//end of method

    public function sectors()
    {
        
      $data['title'] = 'Sectors';
      
      return view('frontend.sectors',$data);
    }//end of method

    public function TeamDetail($id)
    {
        
      $data['title'] = 'TeamDetail';
      $data['data'] = Team::where(['id'=>$id])->first();
      
      return view('frontend.teamDetail',$data);
    }//end of method

    public function applyForJob()
    {
        
      $data['title'] = 'Apply For Job';
      
      return view('frontend.applyForJob',$data);
    }//end of method

    public function blog()
    {
        
      $data['title'] = 'News';
      $data['blog'] = Blog::join('blog_categories','blog_categories.id','=','blogs.cat_id')->where(['blogs.is_deleted'=>0,'blogs.active_status'=>1,'blog_categories.is_deleted'=>0,'blog_categories.active_status'=>1])->orderBy('blogs.id','DESC')->get(['blogs.name','blogs.id','blogs.description','blog_categories.name as cat','blogs.image','blogs.created_at']);
      
      return view('frontend.blog',$data);
    }//end of method

    public function blogSingle(Request $request)
    {
        
      $data['title'] = 'News-Single';
      $data['blog'] = Blog::join('blog_categories','blog_categories.id','=','blogs.cat_id')->where(['blogs.is_deleted'=>0,'blogs.id'=>$request->id,'blogs.active_status'=>1,'blog_categories.is_deleted'=>0,'blog_categories.active_status'=>1])->first(['blogs.name','blogs.id','blogs.description','blog_categories.name as cat','blogs.image','blogs.created_at']);
          $data['share'] = Share::page(route('blog-single',['product'=>$request->id]), $data['blog']->name)
    ->facebook()
    ->twitter()
    ->linkedin('Extra linkedin summary can be passed here')
    ->whatsapp()->getRawLinks();

          $data['blogs'] = Blog::join('blog_categories','blog_categories.id','=','blogs.cat_id')->where(['blogs.is_deleted'=>0,'blogs.active_status'=>1,'blog_categories.is_deleted'=>0,'blog_categories.active_status'=>1])->orderBy('blogs.id','DESC')->get(['blogs.name','blogs.id','blogs.description','blog_categories.name as cat','blogs.image','blogs.created_at']);
      
      return view('frontend.blogSingle',$data);
    }//end of method

    public function services($id)
    {
      $data['title'] = 'Services';
      $data['data'] = Services::where(['active_status'=>1,'is_deleted'=>0,'id'=>$id])->first();
      return view('frontend.services',$data);
    }//end of method

    public function getmenu()
    {
      return Services::where(['active_status'=>1,'is_deleted'=>0])->get();
    }//end of method

    public function saveNewsletter(Request $request){
            $validator = Validator::make($request->all(),[
                'email'=>'required|regex:/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/|unique:newsletters',
            ]);
            // print_r($request->all());
            // die;
        if($validator->passes()) {
            $formdata['email'] = $request->email;
            $row = Newsletter::insertGetId($formdata);
            $msg = 'Subscribed';
                 if($row){
                    return ['status_code' => 200 , 'message' =>$msg];
                }else{
                    return ['status_code' => 201 , 'message' => "Something went wrong !"];
                }
            }
           
        return ['message'=>$validator->errors()->all(),'status_code'=>301];      
    }//end of method

    public function savecontactform(Request $request){
            $validator = Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'message'=>'required',
            ]);
            // print_r($request->all());
            // die;
        if($validator->passes()) {
            $formdata['name'] = $request->name;
            $formdata['email'] = $request->email;
            $formdata['phone'] = $request->phone;
            $formdata['message'] = $request->message;
            $row = ContactUs::insertGetId($formdata);
            $msg = 'We Will Contact You Soon!!';
                 if($row){
                    return ['status_code' => 200 , 'message' =>$msg];
                }else{
                    return ['status_code' => 201 , 'message' => "Something went wrong !"];
                }
            }
           
        return ['message'=>$validator->errors()->all(),'status_code'=>301];      
    }//end of method

    public function saveapplyForJob(Request $request){
            $validator = Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'message'=>'required',
                'qualification'=>'required',
                'resume'=>'required',
            ]);
            // print_r($request->all());
            // die;
        if($validator->passes()) {
            $formdata['name'] = $request->name;
            $formdata['email'] = $request->email;
            $formdata['phone'] = $request->phone;
            $formdata['message'] = $request->message;
            $formdata['qualification'] = $request->qualification;
            if(!empty($request->file('resume'))){
                    $img = $request->file('resume');
                    $filedata['path'] = $formdata['file'] = url('uploads').'/'.uniqid().'-'.$img->getClientOriginalName(); 
                    $request->file('resume')->move(public_path('uploads'), $formdata['file']);
            }
            $row = Job::insertGetId($formdata);
            $msg = 'We Will Contact You Soon!!';
                 if($row){
                    return ['status_code' => 200 , 'message' =>$msg];
                }else{
                    return ['status_code' => 201 , 'message' => "Something went wrong !"];
                }
            }
           
        return ['message'=>$validator->errors()->all(),'status_code'=>301];      
    }//end of method

}
