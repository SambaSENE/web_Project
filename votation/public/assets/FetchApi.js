class FetchApi
{
    static async FetchApi(_url){
        let response = await fetch(_url);
        let json = response.json();
        return json;
    }
}

export { FetchApi };