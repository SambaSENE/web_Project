class RepoVote
{
    static urlApi = "http://localhost:3000/api";
    
    static async fetchApi(_chemin , _option = {})
    {
        let  url = RepoVote.urlApi + _chemin;
        let response = await fetch(url , _option);
        let json =  response.json();

        return json;
    }

    static async getCandidat()
    {
        
    }
}
export { RepoVote }