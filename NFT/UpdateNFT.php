<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Welcome to our NFT store.">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/cloud_&_cup.css">
        <script src="https://kit.fontawesome.com/b44b654493.js" crossorigin="anonymous"></script>
        <script defer src="js/script.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>Update NFT</title>
        <link rel="stylesheet" href="css/log.css">
        <link rel="stylesheet" href="css/add-update.css">
    </head>
    <body class="active">
        <div class="Account nft-con">
            <div class="formBx nftBx">
                <div class="form signupForm">
                    <form action="updateNFTCntr.php?">
                        <h3>Update your NFT</h3>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputNFTUpdateName" placeholder="NFT Update" required>
                            <label for="floatingInputNFTUpdateName">Enter the new name of your NFT</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputNFTUpdatePrice" placeholder="NFT Update" required>
                            <label for="floatingInputNFTUpdatePrice">Enter the new price of your NFT</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a description here" id="floatingTextareaUpdateNFT" style="height: 100px"></textarea>
                            <label for="floatingTextareaUpdateNFT">Enter the new description of your NFT</label>
                        </div>
                        <input type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>