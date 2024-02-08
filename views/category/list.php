<h1>Bu category list</h1>
<div class="container">
    <a href="/index.php/category/add" class="btn btn-success">Qoshish</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Kategoriya nomi</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($list as $item){
            echo '<tr>';
            echo '<td>' . $item -> id . '</td>';
            echo '<td>' . $item -> name . '</td>';
            echo "<td><a href=\"/index.php/category/update/".$item ->id ."\" class='btn btn-primary'>Update</a>
        <a href=\"/index.php/category/delete/".$item -> id ."\"  class='btn btn-danger'>Delete</a> </td>";
            echo '</tr>';
        } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for($page = 1; $page <= $pageCount; $page++){ ?>
                <li class="page-item"><a class="page-link" href="/index.php/category/list?page=<?=$page?>"><?=$page?></a></li>
            <?php  } ?>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>