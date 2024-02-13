import { Candidat } from "./Candidat.js";
import { FetchApi } from "./FetchApi.js";

class VotationRepositoty
{
    static urlApi = 'http://localhost:3000/api';
    
    static async fetchApi(_url){
        let response = await fetch(_url);
        let json = response.json();
        return json;
    }
   

    static async getSessions()
    {
        
    }
}

export { VotationRepositoty , Candidat } ;