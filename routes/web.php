<?php

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/well', function () {
	session()->forget('message');
    session()->forget('messagex');
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/currentbalancereport', 'HomeController@currentbalancereport')->name('currentbalancereport');
Route::get('/totaldepositreport', 'HomeController@totaldepositreport')->name('totaldepositreport');
Route::get('/totalwithdrawalreport', 'HomeController@totalwithdrawalreport')->name('totalwithdrawalreport');
Route::get('/allcustomerreport', 'HomeController@allcustomerreport')->name('allcustomerreport');
Route::get('/totalpassbookreport', 'HomeController@totalpassbookreport')->name('totalpassbookreport');
Route::get('/totalcommissionreport', 'HomeController@totalcommissionreport')->name('totalcommissionreport');




//Backend 
//USER MANAGEMENT
Route::get('/usermanagement/newuser', 'Auth\RegisterController@shownewuserform')->name('newuserform');
Route::get('/usermanagement/allusers', 'Auth\RegisterController@showalluser')->name('allusers');
Route::get('/usermanagement/updateuser/{id}', 'Auth\RegisterController@showupdateuserform')->name('updateuserform');
Route::post('/updateuserinfo', 'Auth\RegisterController@update')->name('updateuserinfo');
Route::get('/usermanagement/viewuser/{id}', 'Auth\RegisterController@viewuser')->name('viewuser');


// Till MANAGEMENT

Route::get('officertill/newtill', 'GlController@shownewtillform')->name('shownewtillform');
Route::get('officertill/alltill', 'GlController@showalltill')->name('alltill');
Route::post('/registertill', 'GlController@registertill')->name('registertill');
Route::get('officertill/updatetill/{id}', 'GlController@showupdatetillform')->name('showupdatetillform');
Route::post('/updatetillinfo', 'GlController@updatetillinfo')->name('updatetillinfo');
Route::get('officertill/balance', 'GlController@showbalanceform')->name('showbalanceform');
Route::post('/gettillbalance', 'GlController@gettillbalance')->name('gettillbalance');



// Route::get('officertill/showbalance/{id}', 'GlController@showglbalance')->name('showglbalance');
// Route::get('officertill/listofgl', 'GlController@listofgl')->name('listofgl');





// CUSTOMER MANAGEMENT

Route::get('/customer/new', 'CustomerinfoController@newcustomerform')->name('newcustomer');
Route::get('/customer/all', 'CustomerinfoController@showallcustomer')->name('allcustomer');
Route::get('/customer/update/{id}', 'CustomerinfoController@showupdateform')->name('showupdateform');
Route::get('/customer/withdrawable/{id}', 'CustomerinfoController@makewithdrawable')->name('makewithdrawable');
Route::get('/customer/disablewithdrawable/{id}', 'CustomerinfoController@disablethdrawable')->name('disablethdrawable');
Route::get('/customer/info/{id}', 'CustomerinfoController@showinfo')->name('showinfo');
Route::post('/updatecustomer', 'CustomerinfoController@update')->name('updatecustomer');
Route::post('/registercustomer', 'CustomerinfoController@create')->name('registercustomer');
Route::get('/customer/mycustomers', 'CustomerinfoController@showmycustomers')->name('showmycustomers');
Route::get('/customer/balance', 'CustomerinfoController@checkbalanceform')->name('checkbalanceform');
Route::get('/customer/showbalance', 'CustomerinfoController@showcustomerbalance')->name('showcustomerbalance');
Route::get('/customer/listofcustomer', 'CustomerinfoController@listofcustomer')->name('listofcustomer');

Route::get('/customer/report', 'CustomerinfoController@customerreportform')->name('customerreportform');
Route::post('/getreport', 'CustomerinfoController@getreport')->name('getreport');
Route::get('/customer/report/{accountno}', 'CustomerinfoController@report')->name('report');


Route::get('/customer/balance/{id}', 'CustomerinfoController@balance')->name('viewcustomerbalance');
Route::post('/checkbalance', 'CustomerinfoController@checkbalance')->name('checkbalance');
Route::post('/createanotheraccount', 'CustomerinfoController@createanotheraccount')->name('createanotheraccount');

//Passbook

Route::get('/customer/passbook/{id}', 'OperationsController@passbook')->name('passbook');


// General Posting - Customers - General Ledgers and Vault
Route::get('/postings/deposit', 'TransactionController@depositform')->name('deposit');
Route::post('/depositprocess', 'TransactionController@depositprocess')->name('depositprocess');
Route::post('/postdeposit', 'TransactionController@postdeposit')->name('postdeposit');
Route::get('/postings/withdrawal', 'TransactionController@withdrawalform')->name('withdrawal');
Route::get('/postings/mytill', 'TransactionController@mytill')->name('mytill');
Route::post('/withdrawalprocess', 'TransactionController@withdrawalprocess')->name('withdrawalprocess');
Route::post('/postwithdrawal', 'TransactionController@postwithdrawal')->name('postwithdrawal');
Route::get('/postings/officerreportframe', 'TransactionController@officerreportframe')->name('officerreportframe');
Route::post('/officerreport', 'TransactionController@officerreport')->name('officerreport');





// REPORT MANAGEMENT

Route::get('/report/allofficer', 'ReportController@showallofficer')->name('showallofficer');
Route::get('/report/reportbyofficer', 'ReportController@reportbyofficer')->name('reportbyofficer');
Route::get('/report/alltransactions', 'ReportController@alltransactions')->name('alltransactions');
Route::get('/report/bankoneupload', 'ReportController@bankoneupload')->name('bankoneupload');
Route::get('/report/voucher', 'ReportController@voucher')->name('voucher');
Route::post('/searchtrans', 'ReportController@searchtrans')->name('searchtrans');
Route::post('/searchvoucher', 'ReportController@searchvoucher')->name('searchvoucher');
Route::post('/searchofficerreport', 'ReportController@searchofficerreport')->name('searchofficerreport');
Route::get('/business/disable', 'BusinessController@disable')->name('disable');
Route::get('/business/enable', 'BusinessController@enable')->name('enable');




// OPERATIONS MANAGEMENT
Route::get('/operations/creditform', 'OperationsController@creditform')->name('creditform');
Route::get('/operations/processcredit/{id}', 'OperationsController@processcreditform')->name('processcreditform');
Route::post('/credit', 'OperationsController@credit')->name('credit');
Route::post('/processcredit', 'OperationsController@processcredit')->name('processcredit');
Route::post('/postcredit', 'OperationsController@postcredit')->name('postcredit');

Route::get('/operations/debitform', 'OperationsController@debitform')->name('debitform');
Route::get('/operations/processdebit/{id}', 'OperationsController@processdebitform')->name('processdebitform');
Route::post('/debit', 'OperationsController@debit')->name('debit');
Route::post('/processdebit', 'OperationsController@processdebit')->name('processdebit');
Route::post('/postdebit', 'OperationsController@postdebit')->name('postdebit');
//remap

Route::post('/remap', 'OperationsController@remap')->name('remap');
Route::get('/operations/remapform', 'OperationsController@remapform')->name('remapform');

///COntrol system 
Route::get('/control/issues', 'IssueController@issues')->name('issues');
Route::get('/control/resolved/{id}', 'IssueController@resolved')->name('resolved');

//excel

Route::get('export', 'MyExcelController@export')->name('export');
Route::get('exportcabals', 'MyExcelController@exportcabals')->name('exportcabals');





// Quick Loan 
Route::get('/stateloanform', 'QuickloanController@stateloanform')->name('stateloanform');
Route::get('/federalloanform', 'QuickloanController@federalloanform')->name('federalloanform');
Route::get('/employerselection', 'QuickloanController@employerselection')->name('employerselection');

Route::post('/confirmstatedata', 'QuickloanController@confirmstatedata')->name('confirmstatedata');
Route::post('/confirmfederaldata', 'QuickloanController@confirmfederaldata')->name('confirmfederaldata');

Route::post('/submitstatedata', 'QuickloanController@submitstatedata')->name('submitstatedata');
Route::post('/submitfederaldata', 'QuickloanController@submitfederaldata')->name('submitfederaldata');

Route::get('/loan/pending', 'LoanController@pendinglist')->name('pendinglist');
Route::get('/loan/history', 'LoanController@history')->name('history');
Route::get('/loan/process/{id}', 'LoanController@processloan')->name('processloan');
Route::get('/loan/applicationreview/{id}', 'LoanController@review')->name('review');

Route::post('/credit', 'LoanController@credit')->name('credit');