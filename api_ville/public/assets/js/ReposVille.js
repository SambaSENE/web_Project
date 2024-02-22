import { ReposPays } from "./ReposPays.js";

class ReposVille
{
    static baseUrl = 'http://localhost:3000/api/';

    static async getVilles(){
        let url = this.baseUrl + 'villes/' ;
        let response = await fetch(url);
        let json = await response.json();
        let pays = await ReposPays.getCoyntrys();

        for (const item of json) {
            console.log(item);
        }
       
       
        return json;
    }
}
export { ReposVille }
