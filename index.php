<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi js</title>
     <!-- BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
    <div id="app">
        <div class="row justify-content-center row-cols-3">
            <div class="col" v-for="(disk, index) in disks" :key="index">
                <div class="card d-flex p-4 m-4 text-center align-items-center">
                    <img class="card-img-top" :src="disk.poster" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ disk.title }}</h5>
                        <p class="card-text">{{ disk.author }}</p>
                        <p class="card-text">{{ disk.year }}</p>
                        <button type="button" class="btn btn-outline-info">Info</button>
                    </div>
                </div>
            </div>
        </div>




    </div>

 <script src="js/script.js"></script>
</body>
</html>