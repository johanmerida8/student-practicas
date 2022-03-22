
var app = angular.module('InvoiceModule', []);
var controller = app.controller('InvoiceController', ($scope) => {
    $scope.productQuantity = null;
    $scope.selectedProductId = null;
    $scope.products = [
        {id: 1, name: 'Villa Tunari', description: 'Located near La Paz city, it is undoubtedly one of the most outstanding cultural places in our country.' , price: 2000},
        {id: 2, name: 'Tiwanaku', description: 'Villa Tunari is famous among tourists due to the tropical weather and due to nearby national parks.', price: 1000},
        {id: 3, name: 'Salar de Uyuni', description: 'This is by far one of the most beautiful places on earth. Come to Bolivia and visit it.', price: 3000},
        
    ];
    
    $scope.details = [];

    $scope.detailsView = {
        get details() {
            return $scope.details;
        },
        get total() {
            return _.sumBy(this.details, (detail) => {
                return detail.subtotal;
            })
        },
        get average() {
            if (this.details.length == 0) {
                return 0;
            }

            return _.meanBy(this.details, (detail) => {
                return detail.subtotal;
            })
        },
        get max() {
            if (this.details.length == 0) {
                return 0;
            }

            return _.maxBy(this.details, (detail) => {
                return detail.subtotal;
            }).subtotal;
        },
        get min() {
            if (this.details.length == 0) {
                return 0;
            }

            return _.minBy(this.details, (detail) => {
                return detail.subtotal;
            }).subtotal;
        }
    }

    

    $scope.addDetail = () => {
        let selectedProductId = parseInt($scope.selectedProductId);
        let product = _.find($scope.products, {id: selectedProductId});
        let productQuantity = parseInt($scope.productQuantity);

        $scope.details.push({
            productName: product.name,
            productDescription: product.description,
            productPrice: product.price,
            productQuantity: productQuantity,
            subtotal: productQuantity * product.price
        })
    }
})