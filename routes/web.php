<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\AssignedProjectController;
use App\Http\Controllers\Admin\UserReportController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Employee\EmployeeHomeController;
use App\Http\Controllers\Employee\UserProjectController;
use App\Http\Controllers\Employee\ReportController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::group(['as' => 'admin.', 'prefix' => 'admin'], function() {
        Route::get('/', [HomeController::class, 'home'])->name('home');
        Route::group(['as' => 'employee.', 'prefix' => 'employee'], function() {
            Route::get('/list', [EmployeeController::class, 'index'])->name('list');
            Route::get('/add', [EmployeeController::class, 'create'])->name('add');
            Route::post('/submit', [EmployeeController::class, 'store'])->name('submit');
            Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [EmployeeController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'project.', 'prefix' => 'project'], function() {
            Route::get('/list', [ProjectController::class, 'index'])->name('list');
            Route::get('/add', [ProjectController::class, 'create'])->name('add');
            Route::post('/submit', [ProjectController::class, 'store'])->name('submit');
            Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [ProjectController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ProjectController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'assignment.', 'prefix' => 'assignment'], function() {
            Route::get('/list', [AssignedProjectController::class, 'index'])->name('list');
            Route::get('/add', [AssignedProjectController::class, 'create'])->name('add');
            Route::post('/submit', [AssignedProjectController::class, 'store'])->name('submit');
            Route::get('/edit/{id}', [AssignedProjectController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [AssignedProjectController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [AssignedProjectController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'report.', 'prefix' => 'report'], function() {
            Route::get('/list', [UserReportController::class, 'index'])->name('list');
        });
        Route::group(['as' => 'role.', 'prefix' => 'role'], function() {
            Route::get('/list', [RoleController::class, 'index'])->name('list');
            Route::get('/user-list', [RoleController::class, 'userList'])->name('userList');
            Route::get('/menu-head-list', [RoleController::class, 'menuHeadList'])->name('menuHeadList');
            Route::get('/menu-list', [RoleController::class, 'menuList'])->name('menuList');
            Route::get('/add', [RoleController::class, 'create'])->name('add');
            Route::get('/user-add', [RoleController::class, 'createUser'])->name('userAdd');
            Route::post('/submit', [RoleController::class, 'store'])->name('submit');
            Route::post('/user-submit', [RoleController::class, 'userStore'])->name('userSubmit');
            Route::post('/menu-head-submit', [RoleController::class, 'menuHeadStore'])->name('menuHeadSubmit');
            Route::post('/menu-submit', [RoleController::class, 'menuStore'])->name('menuSubmit');
            Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
            Route::get('/user-edit/{id}', [RoleController::class, 'userEdit'])->name('userEdit');
            Route::get('/menu-head-edit/{id}', [RoleController::class, 'menuHeadEdit'])->name('menuHeadEdit');
            Route::get('/menu-edit/{id}', [RoleController::class, 'menuEdit'])->name('menuEdit');
            Route::post('/update/{id}', [RoleController::class, 'update'])->name('update');
            Route::post('/user-update/{id}', [RoleController::class, 'userUpdate'])->name('userUpdate');
            Route::post('/menu-head-update/{id}', [RoleController::class, 'menuHeadUpdate'])->name('menuHeadUpdate');
            Route::post('/menu-update/{id}', [RoleController::class, 'menuUpdate'])->name('menuUpdate');
            Route::get('/delete/{id}', [RoleController::class, 'destroy'])->name('delete');
            Route::get('/user-delete/{id}', [RoleController::class, 'userDestroy'])->name('userDelete');
            Route::get('/menu-head-delete/{id}', [RoleController::class, 'menuHeadDestroy'])->name('menuHeadDelete');
            Route::get('/menu-delete/{id}', [RoleController::class, 'menuDestroy'])->name('menuDelete');
            Route::get('/edit-role-access/{id}', [RoleController::class, 'editRoleAccess'])->name('editRoleAccess');
            Route::post('/role-access-update/{id}', [RoleController::class, 'updateRoleAccess'])->name('roleAccessUpdate');
            Route::get('/reset-password/{id}', [RoleController::class, 'resetPassword'])->name('resetPassword');
        });
    });    
});

Route::middleware(['auth', 'employee'])->group(function () {
    Route::group(['as' => 'employee.', 'prefix' => 'employee'], function() {
        Route::get('/', [EmployeeHomeController::class, 'home'])->name('home');
        Route::group(['as' => 'assignment.', 'prefix' => 'assignment'], function() {
            Route::get('/list', [UserProjectController::class, 'index'])->name('list');
            Route::get('/get-assignments-by-project/{id}', [UserProjectController::class, 'getAssignmentsByProject'])->name('byProject');
        });
        Route::group(['as' => 'report.', 'prefix' => 'report'], function() {
            Route::get('/list', [ReportController::class, 'index'])->name('list');
            Route::get('/add', [ReportController::class, 'create'])->name('add');
            Route::post('/submit', [ReportController::class, 'store'])->name('submit');
            Route::get('/edit/{id}', [ReportController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [ReportController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ReportController::class, 'destroy'])->name('delete');
        });
    });    
});
