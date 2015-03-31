</style>
<script src="jquery-1.3.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
var id = 0;
var imgs = new Array();
imgs[0] = "imagens/pic01.jpg";
imgs[1] = "imagens/pic02.jpg";
imgs[2] = "imagens/pic03.jpg";
imgs[3] = "imagens/pic04.jpg";
//Aqui apenas adicione mais imagens
function troca(){
        if (id<(imgs.length-1)){
        id++;   
        }else{
                id=0
        }
        $("#main").fadeOut(600);
        setTimeout("$('#main').html('<img src=\""+imgs[id]+"\" width=\"100%\" height=\"100%\" alt=\"\" />');$('#main').fadeIn(600);",600);
}
var segundos = 10; //Segundos entre cada imagem
setInterval("troca();",segundos*10);
</script>