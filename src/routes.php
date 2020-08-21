<?php

use Illuminate\Support\Facades\Route;

Route::get('/workflow/', 'the42coders\Workflows\Http\Controllers\WorkflowController@index')->name('workflow.index');
Route::get('/workflow/create', 'the42coders\Workflows\Http\Controllers\WorkflowController@create')->name('workflow.create');
Route::post('/workflow/store', 'the42coders\Workflows\Http\Controllers\WorkflowController@store')->name('workflow.store');
Route::get('/workflow/{id}', 'the42coders\Workflows\Http\Controllers\WorkflowController@show')->name('workflow.show');
Route::get('/workflow/{id}/edit', 'the42coders\Workflows\Http\Controllers\WorkflowController@edit')->name('workflow.edit');
Route::get('/workflow/{id}/delete', 'the42coders\Workflows\Http\Controllers\WorkflowController@delete')->name('workflow.delete');
Route::post('/workflow/{id}/update', 'the42coders\Workflows\Http\Controllers\WorkflowController@update')->name('workflow.update');
Route::post('/workflow/reRun/{workflow_log_id}', 'the42coders\Workflows\Http\Controllers\WorkflowController@reRun')->name('workflow.reRun');
Route::post('/workflow/{id}/addTask', 'the42coders\Workflows\Http\Controllers\WorkflowController@addTask')->name('workflow.addTask');
Route::post('/workflow/{id}/addTrigger', 'the42coders\Workflows\Http\Controllers\WorkflowController@addTrigger')->name('workflow.addTrigger');
Route::post('/workflow/{id}/changeValues', 'the42coders\Workflows\Http\Controllers\WorkflowController@changeValues')->name('workflow.changeValues');
Route::post('/workflow/{id}/addConnection', 'the42coders\Workflows\Http\Controllers\WorkflowController@addConnection')->name('workflow.addConnection');
Route::post('/workflow/{id}/removeConnection', 'the42coders\Workflows\Http\Controllers\WorkflowController@removeConnection')->name('workflow.removeConnection');
Route::post('/workflow/{id}/removeTask', 'the42coders\Workflows\Http\Controllers\WorkflowController@removeTask')->name('workflow.removeTask');
Route::post('/workflow/{id}/updateNodePosition', 'the42coders\Workflows\Http\Controllers\WorkflowController@updateNodePosition')->name('workflow.updateNodePosition');
Route::post('/workflow/{id}/getElementSettings', 'the42coders\Workflows\Http\Controllers\WorkflowController@getElementSettings')->name('workflow.getElementSettings');
Route::post('/workflow/{id}/getLogs', 'the42coders\Workflows\Http\Controllers\WorkflowController@getLogs')->name('workflow.getLogs');
Route::post('/workflow/{id}/loadResourceIntelligence', 'the42coders\Workflows\Http\Controllers\WorkflowController@loadResourceIntelligence')->name('workflow.loadResourceIntelligence');