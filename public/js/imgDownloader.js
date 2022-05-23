function download() {
    axios({
        url: 'https://source.unsplash.com/random/500x500',
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
        console.log("função")
}
console.log("Arquivo")