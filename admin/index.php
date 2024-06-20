<?php
session_start();
?>
<?php 
    // require_once "include/header.php"; // Hapus baris ini

    
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }
?>

<?php
    // Database connection
    require_once "include/connection.php";

    // Total number of posts
    $admin_email = $_SESSION['email'];
    $select_total_post = "SELECT * FROM post_description WHERE admin_email = '$admin_email' AND p_time IS NOT NULL";
    $total_post_result = mysqli_query($conn, $select_total_post);

    // Selecting category details
    $sql = "SELECT * FROM post_category WHERE admin_email = '$admin_email'";
    $result = mysqli_query($conn, $sql);
    $i = 1;

    // Selecting about us
    $about_us = "";
    $get_about = "SELECT * FROM about_us WHERE admin_email = '$admin_email' ORDER BY id DESC LIMIT 1";
    $get_about_result = mysqli_query($conn, $get_about);

    if ($get_about_result) {
        while ($about_row = mysqli_fetch_assoc($get_about_result)) {
            $about_us = $about_row["about"];
        }
    }

    // Selecting contact details
    $phn_no = $email = $fax_no = $address = "";
    $get_contact = "SELECT * FROM contact_us WHERE admin_email = '$admin_email' ORDER BY id DESC LIMIT 1";
    $get_contact_result = mysqli_query($conn, $get_contact);

    if ($get_contact_result) {
        while ($contact_row = mysqli_fetch_assoc($get_contact_result)) {
            $phn_no = $contact_row["phn"];
            $email = $contact_row["email"];
            $fax_no = $contact_row["fax"];
            $address = $contact_row["address"];
        }
    }
?>

<style>
    table, th, td {
        border: 1px solid black;
        padding: 5px;
    }
    table {
        border-spacing: 10px;
    }
</style>

<?php 
    require_once "include/header.php";
?>

<div class="container mb-5">
    <div class="row mt-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card shadow">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Post Categories</li>
                    <li class="list-group-item">Total Category: <span class="text-center"><?php echo mysqli_num_rows($result); ?></span></li>
                    <li class="list-group-item text-center"><a href="manage-category.php"><b>View All Categories</b></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card shadow">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Category's Detail</li>
                    <li class="list-group-item">
                        <table style="width:100%" class="table-hover text-center">
                            <tr class="bg-dark">
                                <th>Category Name</th>
                                <th>No. of Posts</th>
                            </tr>
                            <?php 
                            if (mysqli_num_rows($result) > 0) {
                                while ($rows = mysqli_fetch_assoc($result)) {
                                    $c_name = $rows["c_name"];
                                    $no_of_post = $rows["no_of_post"];
                            ?>
                            <tr>
                                <td><?php echo ucwords($c_name); ?></td>
                                <td><?php echo $no_of_post; ?></td>
                            </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='2'>No category found</td></tr>";
                            }
                            ?>
                        </table>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card shadow">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">Post's Detail</li>
                    <li class="list-group-item text-left">Total Posts: <?php 
                        if ($total_post_result) {
                            echo mysqli_num_rows($total_post_result);
                        }
                    ?></li>
                    <li class="list-group-item text-center"><a href="manage-post-desc.php"><b>View All Posts</b></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 2nd row start -->
    <!-- 3rd row start -->
    <div>
        <script>
            new Chart(document.getElementById("chartjs-doughnut"), {
  type: "doughnut",
  data: {
    labels: ["Social", "Search Engines", "Direct", "Other"],
    datasets: [{
      data: [260, 125, 54, 146],
      backgroundColor: [
        window.theme.primary,
        window.theme.success,
        window.theme.warning,
        "#dee2e6"
      ],
      borderColor: "transparent"
    }]
  },
  options: {
    maintainAspectRatio: false,
    cutoutPercentage: 65,
  }
});
        </script>
    
    </div>
</div>

<?php 
    require_once "include/footer.php";
?>
