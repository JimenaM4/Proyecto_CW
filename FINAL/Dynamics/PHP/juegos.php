<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos</title>
</head>
<body>
*{
    margin: 0px;
    padding: 0px;
}

#contenedor
{
    width: 100%;
    height: 640px;
    background-color: antiquewhite;
    display: flex;  
}


aside
{
    width: 17.5%;
    height: 640px;
    background-color: #25282C;
    display: flex;
    flex-direction: column;
    justify-content:space-around;
}
#contcusu
{
    height: 30px;
    width: 100%;
    position: absolute;
    top: 0;
}

#imgusu
{
    width: 20px;
    height: 20px;
    padding-left: 10px;
    padding-top: 5px;
    float: left;
}
#nusu
{
    color: white;
    width: 50px;
    height: 20px;
    padding-top: 8px;
    padding-left: 5px;
    font-size: 10px;
    float: left;
}

#xbox
{
    width: 100%;
    height: 50px;
    display: flex;
}

#apxbox
{
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

#letxbox
{
    height: 15px;
    width: 53px;
    position: absolute;
    padding-top: 12.5px;
}

#fxbox
{
    width: calc(100% - 40px);
    height: 40px;
    background-color: #107c10;
    border-radius: 20px;
    line-height: 40px;
}

#play
{
    width: 100%;
    height: 50px;
    display: flex;
}

#applay
{
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

#letplay
{
    height: 15px;
    width: 68.2px;
    position: absolute;
    padding-top: 12.5px;
    padding-left: 5px;
}

#fplay
{
    width: calc(100% - 40px);
    height: 40px;
    background-color: #003791;
    border-radius: 20px;
    line-height: 40px;
}

#pc
{
    width: 100%;
    height: 50px;
    display: flex;
}

#appc
{
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

#textpc
{
    width: 30px;
    height: 30px;
    position: absolute;
    padding-top: 5px;
    padding-left: 5px;
}

#fpc
{
    width: calc(100% - 40px);
    height: 40px;
    background-color: #D9D9D9;
    border-radius: 20px;
    line-height: 40px;
}


#contenido
{
    width: 82.5%;
    height: 960px;
    background-color: #2d3136;
}
</body>
</html>
<div id="pc">
                <div id="fpc">
                    <img id="appc" src="./Statics/media/chatsjuegos/pcl.png" alt="pc">
                    <img id="textpc" src="./Statics/media/chatsjuegos/letpc.png" alt="letras">
                </div>
            </div>