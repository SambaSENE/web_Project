import { Pays } from "./Pays.js";
import { Ville } from "./Ville.js";

class ReposPays
{
    static BaseUrl = 'http://localhost/api';

    static async getCoyntrys(){
    
        let url = ReposPays.BaseUrl + '/payss/';
        
        let response =  await  fetch(url);
        
        let json = await response.json();
        
       
       
        return json;
    }

    static async getVille(){
        
        let url = ReposPays.BaseUrl + '/villes/';

        let response = await fetch(url);
        
        let json = await response.json();

        let ville =  new Ville(json);
        
        return ville;
    }

    static async getOneVille(_id){
        let url = ReposPays.BaseUrl + '/villes/' + _id
        
        let response =  await fetch(url);

        let json = await response.json();

        return json;
    }
}
export { ReposPays }
