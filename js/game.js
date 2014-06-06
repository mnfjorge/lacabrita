var Game = function () {
    this.store_items = {
        energy: [ //increases the per sec income
            new StoreItem(1, 'Tequila', 'tequila-1', 10, 'energy', 1),
            new StoreItem(2, 'Pimenta', 'pepper-1', 20, 'energy', 2),
            new StoreItem(3, 'Tacos', 'tacos-1', 30, 'energy', 3)
        ],
        upgrade: [ //increases the click income
            new StoreItem(1, 'Chapéu', 'hat-1', 100, 'upgrade', 1),
            new StoreItem(2, 'Pimenta', 'hat-2', 200, 'upgrade', 2),
            new StoreItem(3, 'Capacete', 'hat-3', 300, 'upgrade', 3)
        ]
    };
};

var StoreItem = function (id, name, img, value, type, benefit_per_sec) {
    this.id = id;
    this.name = name;
    this.img = img;
    this.value = value;
    this.type = type;
    this.benefit_per_sec = benefit_per_sec;

    this.canBuy = function(){
        return user.aguita >= this.value;
    };
}

var User = function () {
    this.aguita = 0;
    this.energy = [];
    this.upgrade = [];
};
var user = new User();