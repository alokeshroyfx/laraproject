<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home','HomeController@index')->name('home');
Route::get('/settings','HomeController@Password')->name('settings');
Route::post('/update-pass','HomeController@UpdatePass');

//customers routes--------------
Route::get('/add-customer','CustomerController@index')->name('add.customer')->middleware('verified');
Route::post('/insert-customer','CustomerController@Store');
Route::get('/all-customer','CustomerController@AllCustomer')->name('all.customer');
Route::get('/view-customer/{id}','CustomerController@ViewCustomer');
Route::get('/delete-customer/{id}','CustomerController@DeleteCustomer');
Route::get('/edit-customer/{id}','CustomerController@EditCustomer');
Route::post('/update-customer/{id}','CustomerController@UpdateCustomer');

//suppliers routes-------------
Route::get('/add-supplier','SupplierController@index')->name('add.supplier');
Route::post('/insert-supplier','SupplierController@SupplierStore');
Route::get('/all-supplier','SupplierController@AllSupplier')->name('all.supplier');
Route::get('/view-supplier/{id}','SupplierController@ViewSupplier');
Route::get('/delete-supplier/{id}','SupplierController@DeleteSupplier');
Route::get('/edit-supplier/{id}','SupplierController@EditSupplier');
Route::post('/update-supplier/{id}','SupplierController@UpdateSupplier');

//category routes---------------
Route::get('/add-category','CategoriesController@AddCategory')->name('add.category');
Route::post('/insert-category','CategoriesController@InsertCategory');
Route::get('/all-catgory','CategoriesController@AllCategory')->name('all.category');
Route::get('/delete-category/{id}','CategoriesController@DeleteCategory');
Route::get('/edit-category/{id}','CategoriesController@EditCategory');
Route::post('/update-category/{id}','CategoriesController@UpdateCategory');

//product routes---------------
Route::get('/add-product','ProductController@AddProduct')->name('add.product');
Route::post('/insert-product','ProductController@InsertProduct');
Route::get('/all-product','ProductController@AllProduct')->name('all.product');
Route::get('/delete-product/{id}','ProductController@DeleteProduct');
Route::get('/view-product/{id}','ProductController@ViewProduct'); 
Route::get('/edit-product/{id}', 'ProductController@EditProduct');
Route::post('/update-product/{id}','ProductController@UpdateProduct');

//pos routes--------------------
Route::get('/pos','PosController@index')->name('pos');
Route::get('/pending/order','PosController@PendingOrder')->name('pending.orders'); 
Route::get('/view-order-status/{id}','PosController@ViewOrder');
Route::get('/pos-done/{id}','PosController@PosDONE');
Route::get('/success/order','PosController@SuccessOrder')->name('success.orders');

//cart controller------------------
Route::post('/add-cart','CartController@index');
Route::post('/cart-update/{rowId}','CartController@CartUpdate');
Route::get('/cart-remove/{rowId}','CartController@CartRemove');
Route::post('/invoice','CartController@CreateInvoice');
Route::post('/final-invoice','CartController@FinalInvoice');

//sales history route---------------
Route::get('/today-history','PosController@Todayhistory')->name('sales.today');

//expense routes ---------------------
Route::get('/add-expense','ExpenseController@AddExpense')->name('add.expense');
Route::post('/insert-expense','ExpenseController@InserExpense');
Route::get('/today-expense','ExpenseController@TodayExpense')->name('today.expense');
Route::get('/edit-today-expense/{id}', 'ExpenseController@EditTodayExpense');
Route::post('/update-expense/{id}','ExpenseController@UpdateExpense');
Route::get('/monthly-expense','ExpenseController@MonthlyExpense')->name('monthly.expense');
Route::get('/yearly-expense','ExpenseController@YearlyExpense')->name('yearly.expense');

//monthly more expenses route-----------------------
Route::get('/january-expense','ExpenseController@JanuaryExpense')->name('january.expense');
Route::get('/february-expense','ExpenseController@FebruaryExpense')->name('february.expense');
Route::get('/march-expense','ExpenseController@MarchExpense')->name('march.expense');
Route::get('/april-expense','ExpenseController@AprilExpense')->name('april.expense');
Route::get('/may-expense','ExpenseController@MayExpense')->name('may.expense');
Route::get('/june-expense','ExpenseController@JuneExpense')->name('june.expense');
Route::get('/july-expense','ExpenseController@JulyExpense')->name('july.expense');
Route::get('/august-expense','ExpenseController@AugustExpense')->name('august.expense');
Route::get('/september-expense','ExpenseController@SeptemberExpense')->name('september.expense');
Route::get('/october-expense','ExpenseController@OctoberExpense')->name('october.expense');
Route::get('/november-expense','ExpenseController@NovemberExpense')->name('november.expense');
Route::get('/december-expense','ExpenseController@DecemberExpense')->name('december.expense');

