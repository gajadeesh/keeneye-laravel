@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recruit</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button 
                            type="button" 
                            class="btn btn-primary btn-lg" 
                            data-toggle="modal" 
                            data-target="#favoritesModal">
                            Recruit
                        </button>

                        

                        <div class="modal fade" id="favoritesModal" 
                            tabindex="-1" role="dialog" 
                            aria-labelledby="favoritesModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" 
                                data-dismiss="modal" 
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" 
                                id="favoritesModalLabel">Recrite</h4>
                            </div>
                            <div class="modal-body">
                                 <form method="post" action="{{ url('recruitAdd') }}">
                                    <div class="form-group">
                                        <label for="headhunterName">Head Hunter:</label>
                                        {{-- <input type="text" class="form-control" name="head_name"/> --}}
                                        {{-- {!! Form::select('size', array('L' => 'Large', 'S' => 'Small'), 'S'); !!} --}}
                                        <select name="headhunterRecruit" class="form-control" id="">
                                            @foreach ($headhunter as $headhunters)
                                                <option value="{{$headhunters->name}}">{{$headhunters->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position :</label>
                                        <select name="positionRecruit" class="form-control" id="">
                                                <option value="SE">SE</option>
                                                <option value="QA">QA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="candidateName">Candidate Name :</label>
                                        <select name="candidateRecruit" class="form-control" id="">
                                            @foreach ($candidate as $candidates)
                                                <option value="{{$candidates->name}}">{{$candidates->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Status :</label>
                                        <select name="statusRecruit" class="form-control" id="">
                                                <option value="true">True</option>
                                                <option value="false">False</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-success">Recruit</button>
                                </form>
                            </div>
                          
                            </div>
                        </div>
                        </div>
                    <br/>
                    <table class="table table-bordered table-stripped">
                            <tr>
                                <th>Head Hunter Name</th>
                                <th>Position</th>
                                <th>Candidate Name</th>
                                <th>Status</th>
                                
                            </tr>
                            @foreach($recruit as $recruits)
                            <tr>
                                <td>{{$recruits->headhunterName}}</td>
                                <td>{{$recruits->position}}</td>
                                <td>{{$recruits->candidateName}}</td>
                                <td>@if ($recruits->recruited == "true")
                                    <button class="btn btn-success">Recruited</button>
                                    @else
                                        <button class="btn btn-danger">Not Recruited</button>
                                    @endif
                                    
                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection

