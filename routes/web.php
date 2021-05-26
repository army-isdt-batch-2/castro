<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[
    App\Http\Controllers\LoginController::class,
    'index'
]);

Route::get('/table',[
    App\Http\Controllers\LoginController::class,
    'table'
]);

Route::get('/layout',[
    App\Http\Controllers\LoginController::class,
    'layout'
]);

Route::get('/employees',[
    App\Http\Controllers\EmployeesController::class,
    'employees'
]);

Route::get('/loans',[
    App\Http\Controllers\LoansController::class,
    'loans'
]);

Route::get('/leaves',[
    App\Http\Controllers\LeavesController::class,
    'leaves'
]);

Route::get('/mandatory-deductions',[
    App\Http\Controllers\DeductionsController::class,
    'mandatory_deductions'
]);

Route::get('/timekeeping',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping'
]);

Route::get('/payslips',[
    App\Http\Controllers\PayslipsController::class,
    'payslips'
]);

Route::get('/settings',[
    App\Http\Controllers\SettingsController::class,
    'settings'
]);

Route::get('/form',[
    App\Http\Controllers\FormController::class,
    'form'
]);

Route::get('/department',[
    App\Http\Controllers\DepartmentController::class,
    'department'
])->name('department.home');

Route::get('/department/create',[
    App\Http\Controllers\DepartmentController::class,
    'department_create'
])->name('department.create');

Route::post('/department/create/save',[
    App\Http\Controllers\DepartmentController::class,
    'department_create_save'
])->name('department.create.save');

Route::get('/employees/create',[
    App\Http\Controllers\EmployeesController::class,
    'employees_create'
])->name('employees.home');

Route::post('/employees/create/save',[
    App\Http\Controllers\EmployeesController::class,
    'employees_create_save'
])->name('employees.create.save');

Route::get('/leaves/create',[
    App\Http\Controllers\LeavesController::class,
    'leaves_create'
])->name('leaves.home');

Route::post('/leaves/create/save',[
    App\Http\Controllers\LeavesController::class,
    'leaves_create_save'
])->name('leaves.create.save');

Route::get('/loans/create',[
    App\Http\Controllers\LoansController::class,
    'loans_create'
])->name('loans.home');

Route::post('/loans/create/save',[
    App\Http\Controllers\LoansController::class,
    'loans_create_save'
])->name('loans.create.save');

Route::get('/mandatory-deductions/create',[
    App\Http\Controllers\DeductionsController::class,
    'mandatory_deductions_create'
])->name('mandatory_deductions.home');

Route::post('/mandatory-deductions/create/save',[
    App\Http\Controllers\DeductionsController::class,
    'mandatory_deductions_create_save'
])->name('mandatory_deductions.create.save');

Route::get('/timekeeping/create',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping_create'
])->name('timekeeping.home');

Route::post('/timekeeping/create/save',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping_create_save'
])->name('timekeeping.create.save');

Route::get('/payslips/create',[
    App\Http\Controllers\PayslipsController::class,
    'payslips_create'
])->name('payslips.home');

Route::post('/payslips/create/save',[
    App\Http\Controllers\PayslipsController::class,
    'payslips_create_save'
])->name('payslips.create.save');

Route::get('/settings/create',[
    App\Http\Controllers\SettingsController::class,
    'settings_create'
])->name('settings.home');

Route::post('/settings/create/save',[
    App\Http\Controllers\SettingsController::class,
    'settings_create_save'
])->name('settings.create.save');

Route::get('/timekeeping/view',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping_view'
]);

Route::get('/payslips/view',[
    App\Http\Controllers\PayslipsController::class,
    'payslips_view'
]);