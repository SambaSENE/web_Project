import { Pays } from "./Pays.js";
import { Ville } from "./Ville.js";

class ReposPays
{
    static BaseUrl = 'http://localhost:3000/api';
    static async getCoyntrys(){
    
        let response =  await  fetch(ReposPays.BaseUrl + '/payss');
        let json = response

    
    }
}
export { ReposPays }
