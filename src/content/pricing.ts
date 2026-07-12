/**
 * DRAFT pricing — placeholder anchors, all "desde" (from). Confirm real numbers
 * with the client before launch (see ASADO-PLAN.md §6 / §8).
 */

export const deliveryPricing = {
  cajas: [
    { name: "Caja Asado", people: "4-6 personas", priceFrom: "₲ 350.000" },
    { name: "Caja Premium", people: "8-10 personas", priceFrom: "₲ 650.000" },
  ],
  cortesPorKg: [
    { name: "Vacío", priceFrom: "₲ 55.000/kg" },
    { name: "Costilla", priceFrom: "₲ 45.000/kg" },
    { name: "Tapa cuadril", priceFrom: "₲ 60.000/kg" },
  ],
  delivery: {
    free: "Delivery gratis en Asunción desde ₲ 300.000",
    granAsuncion: "₲ 25.000 en Gran Asunción",
  },
};

export const parrillaAlquilerPricing = [
  { name: "Parrilla portátil", priceFrom: "₲ 150.000/día" },
  { name: "Parrilla de evento (50+ personas)", priceFrom: "₲ 400.000/día", note: "incluye entrega e instalación" },
];

export const parrillaVentaPricing = [
  { name: "Parrilla portátil", priceFrom: "₲ 850.000" },
  { name: "Parrilla de obra / premium", priceFrom: "₲ 3.500.000", note: "presupuesto por WhatsApp" },
];

export const asadorPrivadoPricing = {
  priceFrom: "₲ 120.000/persona",
  minimo: "Mínimo 10 personas",
  incluye: ["Carne", "Asador", "Parrilla", "Mise en place"],
  noIncluye: ["Bebidas"],
};
