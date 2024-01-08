<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul ;?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ysabeau">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        @media (min-width: 768px) {
            .saldo-left {
                border-top-right-radius: 0 !important;
                border-bottom-right-radius: 0 !important;
            }
            .saldo-right{
                border-top-left-radius: 0 !important;
                border-bottom-left-radius: 0 !important;
            }
            .tarik p{
                display:none !important;
            }
        }
        @media (max-width: 768px) {
            .tarik i{
                display:none !important;
            }
            .tarik p{
                margin:0 !important;
            }
        }
        @media (max-width: 576px) {
            .saldo-title,.jml-saldo {
                text-align:center;
            }
        }
    </style>
</head>

<body>