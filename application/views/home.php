<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#">หน้าหลัก</a></li>
            <li><a href="#">นิทรรศการ</a></li>
            <li><a href="#">ข่าวประชาสัมพันธ์</a></li>
            <li class="icon"><i class="fas fa-user" style="font-size: 20px; color: black;"></i></li>
        </ul>
    </nav>

    <div class="content">
        <div class="left-image">
            <div class="search-container">
                <input type="text" placeholder="ค้นหา...">
                <button class="search-icon"><i class="fas fa-search" style="font-size: 20px; color: black;"></i></button>
            </div>
            <img src="http://localhost/projectSCI/assets/images/sci.png" alt="Left Image">
            <p class="university-name">มหาวิทยาลัยราชภัฏนครปฐม</p>
            <button class="start-button">
                <span class="icon"><i class="fas fa-play" style="font-size: 20px; color: white;"></i></span>
                GET START
            </button>
        </div>
        <div class="right-image">
            <img src="http://localhost/projectSCI/assets/images/people.png" alt="Right Image" style="margin-top: 100px;">
        </div>
    </div>
</body>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
        margin: 0;
        padding: 0;
    }

    nav {
        background-color: #fff;
        padding: 10px;
        position: absolute;
        top: 10px;
        right: 0;
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav ul li {
        margin-right: 20px;
    }

    nav ul li a {
        font-size: 20px;
        color: black;
        text-decoration: none;
        padding: 8px 20px;
        transition: background-color 0.3s;
        text-transform: uppercase;
    }

    nav ul li a:hover {
        background-color: #555;
        color: white;
    }

    .search-container {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        width: 100%;
        max-width: 400px;
    }

    .search-container input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        flex: 1;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: calc(100% - 50px);
        margin-right: 10px;
    }

    .search-icon {
        background: none;
        border: none;
        cursor: pointer;
        padding: 5px;
    }

    .start-button {
        background-color: #555;
        /* Changed to dark gray */
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-weight: bold;
        color: white;
        font-size: 18px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        margin-top: 10px;
        transition: background-color 0.3s;
    }

    .start-button:hover {
        background-color: #333;
    }

    .start-button .icon {
        margin-right: 5px;
    }

    .content {
        display: flex;
        justify-content: space-between;
        margin: 20px;
        height: calc(100vh - 120px);
        align-items: center;
    }

    .left-image,
    .right-image {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .left-image img,
    .right-image img {
        width: 100%;
        max-width: 85%;
        height: auto;
        object-fit: cover;
    }

    .university-name {
        margin-top: 10px;
        text-align: center;
        font-size: 30px;
        font-family: 'Libre Bodoni', serif;
    }
</style>

</html>