<!DOCTYPE html>
<html>
<head>
    <title>Bulk link CSV uploading</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>

<div class="container">

        <div class="row">
            <div class="col-sm-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Select a file to import</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('bulk-import-csv')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="file">CSV file to upload</label>
                                <input type="file" name="file" id="file" class="form-control" required>
                                <div class="HelpText error">{{$errors->first('file')}}</div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">
                                    <i class="fa fa-upload"></i> Upload
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">

                    </div>
                </div>
            </div>

            <div class="col-sm-9">
                @if($errors = Session::get('errors'))
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="list-group">
                                @foreach($errors as $error)
                                    <li class="list-group-item">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

                        </div>
                    </div>
                @endif
            </div>
        </div>


</div>

</body>
</html>
