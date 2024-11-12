<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");
$limit_par_page = 6;
$page = "";
if (isset($_POST["page_no"])) {
    $page = $_POST["page_no"];
} else {
    $page = 1;
}
$ofset = ($page - 1) * $limit_par_page;

$sql = "SELECT * FROM students LIMIT {$ofset},{$limit_par_page}";
$result = mysqli_query($conn, $sql);
$output = "";
if (mysqli_num_rows($result) > 0) {
    $output .= '<table border="1" width="100%" cellspasing="0" cellpadding="10px">
        <tr>

          <th widths="100px">Id</th>
          <th>Name</th>
        </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
          <td align='center'>{$row['id']}</td>
          <td>{$row['first_name']} {$row['last_name']}</td>
        </tr>";
    }

    $output .= " </table>";
    $sql_total = "SELECT * FROM students";
    $records = mysqli_query($conn, $sql_total) or die("query unsuccessful");
    $total_records = mysqli_num_rows($records);
    $total_pages = ceil($total_records/$limit_par_page);

    $output .= '<div id="pagination">';
    for ($i=1;$i <= $total_pages; $i++) {

        $output .= " <a class='active' id='{$i}' href=''>{$i}</a>";
    }
    $output .= '</div> ';

    echo $output;
} else {
    echo "No Record found.";
}
