<?php
require_once "./admin/include/connection.php";

$searchTerm = isset($_GET['searchTerm']) ? ucwords($_GET['searchTerm']) : ''; // Ensure searchTerm is set
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Search Results - JD News</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="1.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assetss/css/font-awesome.min.css">
 
    <style>
        .sidebar-post-list {
            padding: 0;
            list-style: none;
        }

        .sidebar-post-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .sidebar-post-list li img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 10px;
        }

        .sidebar-post-list li a {
            text-decoration: none;
            color: #000;
        }

        .sidebar-post-list li a span {
            text-align: left;
            /* Tambahkan ini */
        }

        .sidebar-post-list li a:hover {
            text-decoration: underline;
        }
        .header-with-opacity {
        position: relative;
        padding: 5rem 0;
        margin-bottom: 4rem;
        color: white; /* Ensure text is white */
        text-align: center; /* Center text horizontally */
    }

    .header-with-opacity::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('bg.jpg') center center / cover no-repeat;
        z-index: 0; /* Ensure the pseudo-element is behind the content */
    }

    .header-with-opacity::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Black overlay with opacity */
        z-index: 1; /* Ensure the overlay is above the image but behind the content */
    }

    .header-with-opacity .container {
        position: relative;
        z-index: 2; /* Ensure the content is in front of the pseudo-elements */
    }
    .category-container {
            max-height: 200px;
            /* Sesuaikan tinggi maksimum sesuai kebutuhan */
            overflow-y: auto;
        }
        .sidebar-post-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .post-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .post-link {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: inherit;
    }
    .post-thumbnail {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-right: 10px;
    }
    .post-heading {
        flex-grow: 1; /* Membuat teks memenuhi sisa ruang */
        word-wrap: break-word; /* Membungkus teks panjang agar tidak melampaui lebar elemen */
    }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index2.php">
                <img src="1.png" alt="JD News" width="30" height="auto" style="margin-right: 30px;">JD News
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./admin/login.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <h1 class="mt-4">Search Results for "<?php echo $searchTerm; ?>"</h1>
                <hr>
                <!-- Fetch and display search results-->
                <div class="row">
                    <?php
                    $searchQuery = "SELECT * FROM post_description WHERE p_heading LIKE '%$searchTerm%' OR p_description LIKE '%$searchTerm%' ORDER BY p_time DESC";
                    $result_search = mysqli_query($conn, $searchQuery);

                    if ($result_search && mysqli_num_rows($result_search) > 0) {
                        while ($search_rows = mysqli_fetch_assoc($result_search)) {
                            $post_thumb = $search_rows["p_thumbnail"];
                            $post_heading = $search_rows["p_heading"];
                            $post_id = $search_rows["p_id"];
                            $post_desc = $search_rows["p_description"];
                            $post_calender = $search_rows["p_time"];
                            $post_name = $search_rows["nama_penulis"];
                            $post_category = $search_rows["p_category"];
                    ?>
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="read-post2.php?id=<?php echo $post_id; ?>">
                                        <img style="height: 175px; width: 100%;" class="card-img-top" src="admin/upload/thumbnail/<?php echo $post_thumb; ?>" alt="Post Thumbnail">
                                    </a>
                                    <div class="card-body">
                                        <div class="post_commentbox">
                                            <i class="fa fa-user"></i><?php echo $post_name; ?>
                                            <span>
                                                <i class="fa fa-calendar"></i> <?php echo date('d-M-Y', $post_calender); ?>
                                            </span>
                                            <i class="fa fa-tags"></i><?php echo $post_category; ?>
                                        </div>
                                        <h2 class="card-title h4"><?php echo ucwords($post_heading); ?></h2>
                                        <p class="card-text"><?php echo $post_desc; ?></p>
                                        <a class="btn btn-primary" href="read-post.php?id=<?php echo $post_id; ?>">Read More →</a>
                                    </div>
                                </div>
                                <!-- End of Blog post-->
                            </div>
                    <?php
                        }
                    } else {
                        echo "<p>No articles found for \"$searchTerm\"</p>";
                    }
                    ?>
                </div>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" id="search-term" placeholder="Search for..." aria-label="Search for..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <script>
                    var searchButton = document.getElementById('button-search');
                    var searchTermInput = document.getElementById('search-term');

                    searchButton.addEventListener('click', function() {
                        var searchTerm = searchTermInput.value.trim();
                        if (searchTerm !== '') {
                            window.location.href = 'search-results.php?searchTerm=' + encodeURIComponent(searchTerm);
                        } else {
                            alert('Please enter a search term.');
                        }
                    });
                </script>
                <!-- Categories widget-->
                <?php
                $get_category = "SELECT * FROM post_category";
                $result = mysqli_query($conn, $get_category);
                if ($result) {
                ?>
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                $columnCount = 2;
                                $categoriesPerColumn = ceil(mysqli_num_rows($result) / $columnCount);
                                $currentCategory = 0;

                                mysqli_data_seek($result, 0);

                                while ($currentCategory < $columnCount) {
                                ?>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <?php
                                            $count = 0;
                                            while ($count < $categoriesPerColumn && $row = mysqli_fetch_assoc($result)) {
                                                $c_name = $row["c_name"];
                                            ?>
                                                <li><a href="read-category.php?category=<?php echo $c_name; ?>"><?php echo $c_name; ?></a></li>
                                            <?php
                                                $count++;
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                <?php
                                    $currentCategory++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Latest News</div>
                    <div class="card-body">
                        <ul class="sidebar-post-list">
                            <?php
                            $latest = "SELECT * FROM post_description ORDER BY p_time DESC";
                            $latest_n = mysqli_query($conn, $latest);
                            if ($latest_n) {
                                $i = 1;
                                while ($rows = mysqli_fetch_assoc($latest_n)) {
                                    $heading = $rows["p_heading"];
                                    $img = $rows["p_thumbnail"];
                                    $id = $rows["p_id"];
                            ?>
                                    <li class="post-item">
                                        <a href='read-post.php?id=<?php echo $id; ?>' class="post-link">
                                            <img src="./admin/upload/thumbnail/<?php echo $img; ?>" alt="<?php echo $heading; ?>" class="post-thumbnail">
                                            <span class="post-heading"><?php echo $heading; ?></span>
                                        </a>
                                    </li>
                            <?php
                                    if ($i > 4) {
                                        break;
                                    }
                                    $i++;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; JD News 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
