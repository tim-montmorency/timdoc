const app = Vue.createApp({
  data() {
    return {
      name: "-",
      equipmentsArr: [
        {
          wearing: false,
          defense: 2,
          weight: 5,
          image: 'https://tim-montmorency.com/timdoc/582-518MO/exercices/jeu-defense/images/casque.png'
        },
        {
          wearing: false,
          defense: 4,
          weight: 15,
          image: 'https://tim-montmorency.com/timdoc/582-518MO/exercices/jeu-defense/images/plastron.png'
        },
        {
          wearing: false,
          defense: 1,
          weight: 10,
          image: 'https://tim-montmorency.com/timdoc/582-518MO/exercices/jeu-defense/images/cuissard.png'
        },
      ],
    }
  }
});