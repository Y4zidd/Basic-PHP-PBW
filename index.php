<!DOCTYPE html>
<html>
<head>
    <title>Galeri Hewan Challenge</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .odd {
            background-color: #ffffff;
        }
        .even {
            background-color: #f9f9f9;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Galeri Hewan Challenge</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jumlah Kaki</th>
            <th>Foto</th>
            <th>Cari di Google</th>
        </tr>
        <?php
        $data = array('Ayam', 'Angsa', 'Bebek', 'Domba', 'Kalkun', 'Kambing', 'Kelinci', 'Kerbau', 'Kuda', 'Sapi');
        
        sort($data);
        
        $i = 1;
        foreach ($data as $item) {
            $class = ($i % 2 == 0) ? 'even' : 'odd';
            
            $kaki = (in_array($item, ['Ayam', 'Angsa', 'Bebek', 'Kalkun'])) ? 2 : 4;
        ?>
        <tr class="<?php echo $class; ?>">
            <td><?php echo $i; ?></td>
            <td><?php echo $item; ?></td>
            <td><?php echo $kaki; ?></td>
            <td><img src="img/<?php echo strtolower($item); ?>.jpg" width="50" height="50" alt="<?php echo $item; ?>"></td>
            <td><a href="https://www.google.com/search?tbm=isch&q=<?php echo $item; ?>" target="_blank">Cari</a></td>
        </tr>
        <?php
            $i++;
        }
        ?>
    </table>
</body>
</html>