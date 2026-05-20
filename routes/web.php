<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard.index')->name('dashboard.index');

Route::resourceVerbs([
    'create' => 'criar',
    'edit' => 'editar'

]);

Route::resource('/chamados', TicketController::class)
->only(['index'])
->names('tickets')
->parameters(['chamados' => 'ticket']);

Route::get('/chamados/{ticket:number}', [TicketController::class, 'show'])->name('tickets.show');

Route::view('/tickets/create', 'tickets.create')->name('tickets.create');

Route::view('/admin/users', 'admin.users.index')->name('admin.users.index');
Route::view('/admin/users/create', 'admin.users.create')->name('admin.users.create');
Route::view('/admin/users/1/edit', 'admin.users.edit')->name('admin.users.edit');

Route::view('/admin/profiles', 'admin.profiles.index')->name('admin.profiles.index');
Route::view('/admin/profiles/create', 'admin.profiles.create')->name('admin.profiles.create');
Route::view('/admin/profiles/1/edit', 'admin.profiles.edit')->name('admin.profiles.edit');

Route::view('/admin/categories', 'admin.categories.index')->name('admin.categories.index');
Route::view('/admin/categories/create', 'admin.categories.create')->name('admin.categories.create');
Route::view('/admin/categories/1/edit', 'admin.categories.edit')->name('admin.categories.edit');

Route::view('/admin/priorities', 'admin.priorities.index')->name('admin.priorities.index');
Route::view('/admin/statuses', 'admin.statuses.index')->name('admin.statuses.index');

Route::view('/technician/tickets', 'technician.tickets.index')->name('technician.tickets.index');
Route::view('/user/tickets', 'user.tickets.index')->name('user.tickets.index');
Route::view('/supervisor/dashboard', 'supervisor.dashboard')->name('supervisor.dashboard');
