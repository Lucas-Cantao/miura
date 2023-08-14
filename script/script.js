let test = 0;

function showContent(id)

{
    let content = document.querySelector(`#conteudo-${id}`);

    if(test == 0)
    {
        content.style.display = "block";
        test = 1;
    }else{
        content.style.display = "none";
        test = 0;
    };
};

function redirect()

{
    window.location.href = "#signup"
}