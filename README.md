# M2-Enhanced-Ecommerce
### Foundation for Google Analytics Enhanced Ecommerce for Magento 2

## Uses
Shopping Behavior Tracking:
1. All pageviews
2. Product page view
3. Add to cart on the product page
4. Purchase data

Checkout Funnel Tracking:
1. View Cart
2. Shipping Information and Method
3. Payment Method
4. Order Success

## Missing Items
In the current state the extension does not track add to cart on the category view page. This feature is more dynamic so it has been left out.

## Debugging
All templates are laid out using Magento 2's before.body.end and head.additional. If an event isn't being fired, verify the page layout isn't being overidden.
All click events utilize Magento 2's default markup. If a click event isn't firing, check to see if the ID of the selector matches up.