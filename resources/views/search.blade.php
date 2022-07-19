<html>
    <head>
        <title>
            Search Functionality with pagination
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <div class="input-group">
        <form action="" method="GET">
            <div class="form-outline">
                <input type="search" name="query" class="form-control" placeholder="Enter your query" />
            </div>
            <button type="submit"  name="submit" class="btn btn-primary">
                Search
            </button>
        </form>
       
</div>
@if(isset($products))
    <div class="card">
        <div class="card-header">
            <h3>Search Details</h3>
        </div>
        <div class="card-body">
            @foreach($products as $product)
                {{  $product->name  }}
            @endforeach
        </div>

        {{ $products->links() }}
    </div>

  
@endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>