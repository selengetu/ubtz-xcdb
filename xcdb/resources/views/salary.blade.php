@extends('layouts.parent')

@section('style')
<style>
    .table td,
    .table th {
        font-size: 10px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Хөдөлмөр цалин хөлсний тайлан</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Бүртгэл</a></li>
                <li class="breadcrumb-item active">Тайлан</li>
            </ol>
        </div>
        <div class="col-md-7 align-self-center">
            <a href="#" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down" data-toggle="modal"
                data-target="#exampleModal"> <i class="fa fa-plus" aria-hidden="true"></i> Тайлан үүсгэх</a>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5 class="card-title">Тайлант сар</h5>
                        </div>
                        <div class="ml-auto">
                            <select class="form-control select2" id="sexecutor_id" name="sexecutor_id">
                                @foreach($month as $months)

                                <option value="{{$months->id}}">
                                    {{$months->month_name}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table table-bordered vm"
                            style="font-size:10px; color:black; word-wrap:break-word;">
                            <thead style="background-color:#ceedf9; font-size: 10px;">
                                <tr>
                                    <th>№</th>
                                    <th colspan="2">Класс, төрөл</th>
                                    <th>Ажиллагсадын<br>дундаж тоо</th>
                                    <th>Үүнээс:<br>ажилчид</th>
                                    <th>Ажиллагсадын<br>цалингийн сан </th>
                                    <th>Үндсэн<br>цалин</th>
                                    <th>Сарын үр<br>дүнгийн<br>шагнал </th>
                                    <th>Тасралтгүй<br>ажилласаны<br>нэмэгдэл</th>
                                    <th>Зам шугамын<br>нэмэгдэл</th>
                                    <th>ХХБГ-ийн<br>нэмэгдэл</th>
                                    <th>Шөнө цагийн<br>нэмэгдэл</th>
                                    <th>Амралт баяр<br>ёслол, илүү цагаар<br>ажилласаны нэмэгдэл</th>
                                    <th>Унааны<br>зардал</th>
                                    <th>Бусад<br>нэмэгдэл</th>
                                    <th>Балансын<br>шагнал</th>
                                    <th>Жилийн<br>үр дүнгийн<br>шагнал</th>
                                    <th>Ажиллагсадын<br>дундаж цалин</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($salary as $i=>$salaries)
                                <tr tag='{{$salaries->salary_id}}'>
                                    <td>{{$i+1}}</td>
                                    @if($salaries->pl_perf==1)
                                        <td rowspan="2">{{$salaries->class_name}}</td>
                                        <td>Гүйц</td>
                                    @else
                                        <td>Төл</td>
                                    @endif
                                    <td id="td_{{ $i*15+ 1 }}" onclick="td_clicked({{ $i*15+ 1 }})">{{ $salaries->sl_man       }}</td>
                                    <td id="td_{{ $i*15+ 2 }}" style="background-color: lightgrey;">{{ $salaries->sl_man-2     }}</td>
                                    <td id="td_{{ $i*15+ 3 }}" onclick="td_clicked({{ $i*15+ 3 }})">{{ $salaries->sl_all       }}</td>
                                    <td id="td_{{ $i*15+ 4 }}" onclick="td_clicked({{ $i*15+ 4 }})">{{ $salaries->sl_base      }}</td>
                                    <td id="td_{{ $i*15+ 5 }}" onclick="td_clicked({{ $i*15+ 5 }})">{{ $salaries->sl_prize     }}</td>
                                    <td id="td_{{ $i*15+ 6 }}" onclick="td_clicked({{ $i*15+ 6 }})">{{ $salaries->sl_lifetime  }}</td>
                                    <td id="td_{{ $i*15+ 7 }}" onclick="td_clicked({{ $i*15+ 7 }})">{{ $salaries->sl_line      }}</td>
                                    <td id="td_{{ $i*15+ 8 }}" onclick="td_clicked({{ $i*15+ 8 }})">{{ $salaries->sl_harmful   }}</td>
                                    <td id="td_{{ $i*15+ 9 }}" onclick="td_clicked({{ $i*15+ 9 }})">{{ $salaries->sl_night     }}</td>
                                    <td id="td_{{ $i*15+10 }}" onclick="td_clicked({{ $i*15+10 }})">{{ $salaries->sl_weekend   }}</td>
                                    <td id="td_{{ $i*15+11 }}" onclick="td_clicked({{ $i*15+11 }})">{{ $salaries->sl_transport }}</td>
                                    <td id="td_{{ $i*15+12 }}" onclick="td_clicked({{ $i*15+12 }})">{{ $salaries->sl_food      }}</td>
                                    <td id="td_{{ $i*15+13 }}" onclick="td_clicked({{ $i*15+13 }})">{{ $salaries->sl_balance   }}</td>
                                    <td id="td_{{ $i*15+14 }}" onclick="td_clicked({{ $i*15+14 }})">{{ $salaries->sl_annual    }}</td>
                                    <td id="td_{{ $i*15+15 }}" style="background-color: lightgrey;"> @if($salaries->sl_man==0) {{ $salaries->sl_all }} @else {{ $salaries->sl_all / $salaries->sl_man }} @endif</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let activeID = 0
    function td_clicked(dom_id) {
        if (activeID != dom_id) {
            closeInput(false)
            let td = $('#td_'+dom_id)
            let val = td.html()
            let input = $("<input id='input_"+dom_id+"' type='number' value='"+val+"'/>")
            td.empty().append(input)
            input.select()
        }
        activeID = dom_id
    };

    $(document).keypress(function(e){
        if(e.keyCode == 13) {
            closeInput(true)
        } else if(e.keyCode == 43) {
            closeInput(false)
        }
    });

    function closeInput(jumpNext) {
        if (activeID != 0) {
            let td = $('#td_'+activeID)
            let salary_id = td.closest('tr').attr('tag') // salary id tr-n tag-s avna
            let columnNo = activeID%15
            let val = $('#input_'+activeID).val()
            $.get('update_salary/'+salary_id+'/'+columnNo+'/'+val, function(data) {
                console.log(data) // for debug: print query
            })
            td.empty().append(val)
            let next = activeID+1
            if(columnNo==1 || columnNo==14) { // dundaj tsalin baival dood morluu shiljne
                next = next+1
            }
            activeID = 0
            if(jumpNext) {
                $('#td_'+next).trigger('click')
            }
        }
    }
</script>
@endsection