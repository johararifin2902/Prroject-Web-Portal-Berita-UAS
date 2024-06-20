<?php
require_once "./admin/include/connection.php";

$category = ucwords($_GET["category"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>JD News</title>
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
        <img src="1.png" alt="Deskripsi gambar" width="30" height="auto" style="margin-right :30px;">
        
        <p style="color: white; text-align: center;"><?php
date_default_timezone_set("Asia/Jakarta"); // Set timezone ke Jakarta

// Definisikan nama hari dan bulan dalam bahasa Indonesia
$hari = array(
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
);

$bulan = array(
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
);

// Ambil nama hari dan bulan dalam bahasa Inggris
$english_day = date('l');
$english_month = date('F');

// Konversi nama hari dan bulan ke bahasa Indonesia
$indonesian_day = $hari[$english_day];
$indonesian_month = $bulan[$english_month];

// Tampilkan tanggal dan waktu dalam format bahasa Indonesia
echo $indonesian_day . ", " . date('d') . " " . $indonesian_month . " " . date('Y H:i');
?>

</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index2.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./admin/login.php">Admin</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <br>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <?php
                    $select_cat_news = "SELECT * FROM post_description WHERE p_category = '$category' ORDER BY p_time DESC";
                    $result_cat_news = mysqli_query($conn, $select_cat_news);

                    if ($result_cat_news) {
                        $count = 0; // Initialize the count variable
                        while ($cat_news_rows = mysqli_fetch_assoc($result_cat_news)) {
                            $post_thumb = $cat_news_rows["p_thumbnail"];
                            $post_heading = $cat_news_rows["p_heading"];
                            $post_id = $cat_news_rows["p_id"];
                            $post_desc = $cat_news_rows["p_description"];
                            $post_calender = $cat_news_rows["p_time"];
                            $post_name = $cat_news_rows["nama_penulis"];
                            $post_category = $cat_news_rows["p_category"];

                            // Start a new row for every two posts
                            if ($count % 2 == 0) {
                                if ($count > 0) {
                                    echo '</div>'; // Close the previous row if count is greater than 0
                                }
                                echo '<div class="row">'; // Open a new row
                            }
                            ?>
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="read-post2.php?id=<?php echo $post_id; ?>">
                                        <img style="height: 175px; width: 100%;" class="card-img-top"
                                            src="admin/upload/thumbnail/<?php echo $post_thumb; ?>" alt="Post Thumbnail">
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
                                        <a class="btn btn-primary" href="read-post2.php?id=<?php echo $post_id; ?>">Baca Selengkapnya
                                            →</a>
                                    </div>
                                </div>
                                <!-- End of Blog post-->
                            </div>
                            <?php
                            $count++; // Increment count after displaying a post
                        }
                        // Check if the last row has only one post and add an empty column if needed
                        if ($count % 2 != 0) {
                            echo '<div class="col-lg-6"></div></div>'; // Close the last row and add an empty column
                        } else {
                            echo '</div>'; // Close the last row if it contains two posts
                        }
                    }
                    ?>
                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" id="search-term" placeholder="Cari di JD news Website"
                                aria-label="Cari di JD news Website" aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <script>
    // Mendapatkan elemen tombol pencarian dan input teks
    var searchButton = document.getElementById('button-search');
    var searchTermInput = document.getElementById('search-term');

    // Menambahkan event listener untuk klik tombol pencarian
    searchButton.addEventListener('click', function () {
        // Mendapatkan nilai teks pencarian
        var searchTerm = searchTermInput.value.trim();

        // Cek apakah input pencarian tidak kosong
        if (searchTerm !== '') {
            // Redirect to search results page
            window.location.href = 'search-results.php?searchTerm=' + encodeURIComponent(searchTerm);
        } else {
            // Jika input pencarian kosong, tampilkan pesan peringatan
            alert('Mohon masukkan kata kunci pencarian.');
        }
    });
</script>

                <!-- Categories widget-->
                <!-- Categories widget-->
                <?php
                require_once "./admin/include/connection.php";

                $get_category = "SELECT * FROM post_category";
                $result = mysqli_query($conn, $get_category);
                if ($result) {
                    ?>
                    <div class="card mb-4">
                        <div class="card-header">Kategori</div>
                        <div class="card-body">
                            <div class="row category-container">
                                <?php
                                $columnCount = 2; // Jumlah kolom yang diinginkan
                                $categoriesPerColumn = ceil(mysqli_num_rows($result) / $columnCount); // Hitung jumlah kategori per kolom
                                $currentCategory = 0;

                                // Reset ulang hasil query
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
                                                <li><a
                                                        href="read-category.php?category=<?php echo $c_name; ?>"><?php echo $c_name; ?></a>
                                                </li>
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
                    <div class="card-header">Berita Terbaru</div>
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
                                            <img src="./admin/upload/thumbnail/<?php echo $img; ?>"
                                                alt="<?php echo $heading; ?>" class="post-thumbnail">
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
            <p class="m-0 text-center text-white">Copyright &copy; JD Website</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>