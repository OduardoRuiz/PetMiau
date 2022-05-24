function download(imgparametro) {
    axios({
        url: "https://chart.apis.google.com/chart?cht=qr&chl=http://68.183.115.206/geral/" + imgparametro + "&chs=120x120" ,
        method: 'GET',
        responseType: 'blob'
    })
        .then((response) => {
            const url = window.URL
                .createObjectURL(new Blob([response.data]));
            const link = document.createElement('a');
            link.href = url;
            link.setAttribute('download', 'Meu_pet-QrCode.jpg');
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        })
        console.log(imgparametro)
}
console.log("Arquivo")