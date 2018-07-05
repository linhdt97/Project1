@extends('layout_hdv.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
    	@if(!isset($tmp))
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sach
                    <small>Don dat tour</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>Ten tour</th>
                        <th>Email khach hang</th>
                        <th>So dien thoai</th>
                        <th>So khach tham quan</th>
                        <th>Tong tien</th>
                        <th>Thoi gian bat dau</th>
                        <th>Tinh trang don</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bill as $dsb)
                        <tr class="odd gradeX">
                            <td>{{$dsb->tentour}}</td>
                            <td>{{$dsb->email}}</td>
                            <td>{{$dsb->sodienthoai}}</td>
                            <td>{{$dsb->sokhachdangky}}</td>
                            <td>{{number_format($dsb->tongtien)}}</td>
                            <td>{{$dsb->timeBD}}</td> 
                            @if($dsb->tinhtrangdon == 0) 
                            <td style="color: blue">Don moi</td> 
                            @elseif($dsb->tinhtrangdon == 1) 
                            <td>Duoc chap nhan</td>
                            @elseif($dsb->tinhtrangdon == 2) 
                            <td style="color: red"><i class = "glyphicon glyphicon-remove"></i> Bi tu choi</td>
                            @elseif($dsb->tinhtrangdon == 3) 
                            <td style="color: green"><i class="glyphicon glyphicon-ok"></i> Da thanh toan</td>  
                            @endif  
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row" style="text-align: center">
                {{$bill->links()}}
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sach
                    <small>Don dat tour moi</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>Ten tour</th>
                        <th>Email khach hang</th>
                        <th>So dien thoai</th>
                        <th>So khach tham quan</th>
                        <th>Tong tien</th>
                        <th>Thoi gian bat dau</th>
                        <th>Chap nhan</th>
                        <th>Tu choi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bill as $dsb)
                    	@if($dsb->tinhtrangdon == 0) 
                        <tr class="odd gradeX">
                            <td>{{$dsb->tentour}}</td>
                            <td>{{$dsb->email}}</td>
                            <td>{{$dsb->sodienthoai}}</td>
                            <td>{{$dsb->sokhachdangky}}</td>
                            <td>{{number_format($dsb->tongtien)}}</td>
                            <td>{{$dsb->timeBD}}</td> 
                            <td class="center"><i class="glyphicon glyphicon-ok"></i><a href="{{route('chapnhan',$dsb->id)}}" onclick = "return chapnhan()"> Chap nhan</a></td>
                            <td class="center"><i class="glyphicon glyphicon-remove"></i><a href="{{route('tuchoi',$dsb->id)}}" onclick = "return tuchoi()"> Tu choi</a></td> 
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        function chapnhan(){
            return confirm("Ban chap nhan don tour nay chu?");
        }

        function tuchoi(){
            return confirm("Ban chac chan tu choi don tour nay chu?");
        }
    </script>
@endsection