<?php
namespace usama165\facebook\Controllers;

//namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function index()
    {

        return view('test::test');

    }
    public function math()
    {
        return 'this is a pakage controller';

    }
}
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Validator;
// use Importer;

// class TestController extends Controller
// {
//     public function importFile()
//     {
//         return view('excel::excel');

//     }
//     public function importExcel(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'file' => 'required|max:5000|mimes:xlsx,xls,csv',
//         ]);

//         if ($validator->passes()) {
//             $dateTime = date('Ymd_His');
//             $file = $request->file('file');
//             $fileName = $dateTime . '-' . $file->getClientOriginalName();
//             $savePath = public_path('/upload/');
//             $file->move($savePath, $fileName);

//             $excel = Importer::make('Excel');
//             $excel->load($savePath . $fileName);
//             $excel->hasHeader(true);
//             $collection = $excel->getCollection('email');

//             $arr = array();

//             foreach ($collection as $collection) {
//                 $data = $collection['email'];
//                 array_push($arr, $data);

//             }

//             Mail::send(['text' => 'mail'], ['name', 'madni'], function ($message) use ($arr) {

//                 $message->to($arr, 'madni')->subject('Greetings');
//                 $message->from('usamashaikh8888888888@gmail.com', 'usama shaikh');

//             });
//             print('Sent Successfully');
//         } else {
//             return redirect()->back()
//                 ->with(['errors' => $validator->errors()->all()]);
//         }

//     }
// }