class Candidat {
    constructor(_candidat) {
        Object.assign(this, _candidat);
        this.photo = "./assets/candidats/" + _candidat.id + '.jpg';
    }
   
}

export { Candidat };