import { Candidat } from "./Candidat.js";
import { FetchApi } from "./FetchApi.js";

class VotationRepositoty {
    static urlApi = 'http://localhost:3000/api';

    /**
     * Emet une requête vers l'api et retourne la réponse correspondante
     * @param {String} chemin vers la ressource
     * @param {Object} options de pour la requete 
     * @returns 
     */
    static async fetchApi(chemin, options = [])
    {
        let url = VotationRepositoty.urlApi + chemin;
        let response = await fetch(url, options);
        let json = await response.json();
        console.log(url);
        return json;
    }

    static async getAllCandidat()
    {
        let chemin = '/candidatss/';
        let dataJson =await VotationRepositoty.fetchApi(chemin);
        let candidat = new Candidat(dataJson);
        return candidat;
    }
    static async getCandidat(_id)
    {
        let  chemin = '/candidatss/' + _id;
        let dataJson = await VotationRepositoty.fetchApi(chemin);
        let candidat = new Candidat(dataJson);
        return candidat;
    }
}

export { VotationRepositoty, Candidat };