
/**
 * Machine à  voter
 */
import { VotationRepositoty } from "./votationRepository.js";
import { FetchApi } from "./FetchApi.js";
import { Candidat } from "./Candidat.js";

const APIUrl = 'http://localhost:3000/api/candidatss';


const app = {
    data() {
        return {
            candidats: [],
            arrayCandidat: [],
            votes: []

        }
    },
    async mounted() {
        // const data = await FetchApi.fetchApi(APIUrl);

        // for (const c of data) {
        //     const candidat = new Candidat(c);
        //     this.candidats.push(candidat);
        // }
        // this.arrayCandidat = [...this.candidats];

        // this.arrayCandidats = this.candidats.sort((a, b) => Math.random() - 0.4);
        const candidat = await VotationRepositoty.getAllCandidat();
        console.log(candidat);
    },
    computed: {
        getNbCandidats() {
            return this.candidats.length;
        }
    },
    methods: {
        clickButton(event) {
            let idCandidat = event.target.dataset.id;
            let ouiNon = event.target.textContent;

            document.getElementById(idCandidat).classList.add('cacher');

           if(ouiNon == 'oui'){
            this.votes.push(ouiNon);
           }

        }
    }
}

Vue.createApp(app).mount('#app');