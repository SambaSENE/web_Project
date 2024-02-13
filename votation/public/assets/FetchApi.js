class FetchApi
{
    static async fetchApi(path , option = {}){
        
        let response = await fetch(path ,  option);
        let json = response.json();
        return json;
    }
}

export { FetchApi };