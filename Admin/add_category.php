<html>



<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<div class="app-content">
    <section class="section">
        <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category </li>
        </ol> -->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                        <form id="form_abc1s" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" name="category_name" required class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file" name="image" required class="form-control" id="exampleInputEmail1">
                                    </div>
                                </div>
                            </div>
                            <div id="form__data"></div>
                            <button type="submit" class="btn btn-primary mt-1 mb-0">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</body>


</html>