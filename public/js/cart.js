/**
 * Alpine.js Shopping Cart Component
 */

function shoppingCart() {
    return {
        items: JSON.parse(localStorage.getItem('cartItems')) || [],
        
        get totalItems() {
            return this.items.reduce((sum, item) => sum + item.quantity, 0);
        },
        
        get totalPrice() {
            return this.items.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        },
        
        addToCart(product) {
            const existingItem = this.items.find(item => item.id === product.id);
            
            if (existingItem) {
                existingItem.quantity++;
            } else {
                this.items.push({ ...product, quantity: 1 });
            }
            
            this.saveToLocalStorage();
            this.showNotification('Product added to your Wishlist!');
        },
        
        removeFromCart(id) {
            this.items = this.items.filter(item => item.id !== id);
            this.saveToLocalStorage();
        },
        
        saveToLocalStorage() {
            localStorage.setItem('cartItems', JSON.stringify(this.items));
        },
        
        formatRupiah(number) {
            return 'Rp ' + number.toLocaleString('id-ID');
        },
        
        showNotification(message) {
            // Simple notification - you can enhance this
            const notification = document.createElement('div');
            notification.className = 'fixed top-20 right-26 bg-blue-950 text-white px-6 py-3 rounded-md shadow-lg z-50 animate-fade-in';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 2000);
        }
    }
}
