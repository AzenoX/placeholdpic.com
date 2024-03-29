export function updatePreview() {
    // @ts-ignore
    const link: string = (document.querySelector('#create_link') !== null) ? document.querySelector('#create_link').textContent : 'https://placeholdpic.alexishayat.me/600x400?content=???';



    if(/^https:\/\/placeholdpic.alexishayat.me\/(([0-9]+)x([0-9]+).*)$/.test(link)){
        fetch(link)
            .then(response => response.blob())
            .then(images => {
                // @ts-ignore
                document.querySelector('#preview_img').src = URL.createObjectURL(images) || 'https://placeholdpic.alexishayat.me/600x400?content=???';
            });
    }
    else{
        // @ts-ignore
        document.querySelector('#preview_img').src = 'https://placeholdpic.alexishayat.me/600x400?content=???';
    }

    return true;
}
