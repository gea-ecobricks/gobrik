/*
    Autor: Fábio Almeida
    WebSite: www.fabiodeveloper.com
    Data: 12/04/2020
    Descrição: Recurso que possibilita o aumento do tamanho da fonte através do uso da classe .acessibilidade e de três
    botões.

*/

window.addEventListener('load', () => {
    function ObterTamanhoFonte(seletorComClasseAcessibilidade) {
        let tamanho = window.getComputedStyle(seletorComClasseAcessibilidade, null)
                        .getPropertyValue('font-size');
        return parseFloat(tamanho);
    }

    function ControlaTamanhoElementos(seletoresComClasseAcessibilidade, aumentar, normal)
    {
        for (let i = 0; i < seletoresComClasseAcessibilidade.length; i++) {
            const element = seletoresComClasseAcessibilidade[i];      
            let fontSizeAtual = 0;

            if (normal)
            {
                element.style.fontSize = '1em';
            }
            else
            {        
                if (aumentar)
                    fontSizeAtual = ObterTamanhoFonte(element) + 1;
                else
                    fontSizeAtual = ObterTamanhoFonte(element) - 1;            

                element.style.fontSize = fontSizeAtual.toString() + 'px'; 
            }
        } 
    }

    document.querySelector('#increase-plugin-ac').addEventListener('click', e => {
        let acessibilidade = document.getElementsByClassName('accessibility-plugin-ac');
        ControlaTamanhoElementos(acessibilidade, true);
    });

    document.querySelector('#normal-plugin-ac').addEventListener('click', e => {
        let acessibilidade = document.getElementsByClassName('accessibility-plugin-ac');
        ControlaTamanhoElementos(acessibilidade, null, true);
    });

    document.querySelector('#decrease-plugin-ac').addEventListener('click', e => {
        let acessibilidade = document.getElementsByClassName('accessibility-plugin-ac');
        ControlaTamanhoElementos(acessibilidade, false);
    });
});