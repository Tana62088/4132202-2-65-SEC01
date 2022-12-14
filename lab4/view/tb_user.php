<?php
include 
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>NAME</th>
            <th>PASS</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_user ORDER BY user_id ASC";
        $result = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_assosc($Result)) {
        ?>
        <tr>
            <td><?= $row["user_id"] ?></td>
            <td><?= $row["user_name"]?></td>
            <td><?= $row["user_pas"]?></td>
            <td><button class="btn_del" data="<?= $row["user_id"] ?>">DEL</button></td>
            <td></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>


<script>
    $(".btn_del").click(function(){
        let data = $(this).attr("data");
        alert(data);
    });
</script>