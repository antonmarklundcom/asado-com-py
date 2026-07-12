export type ServiceId = "delivery" | "parrillas-alquiler" | "parrillas-venta" | "asador-privado";

export interface Service {
  id: ServiceId;
  href: string;
  eyebrow: string;
  title: string;
  short: string;
  priceFrom: string;
  waMessage: string;
}

export const services: Service[] = [
  {
    id: "delivery",
    href: "/delivery-de-carne",
    eyebrow: "Delivery",
    title: "Carne premium a domicilio",
    short: "Cortes seleccionados, listos para el fuego. Entregamos en Asunción y Gran Asunción.",
    priceFrom: "Desde ₲ 350.000",
    waMessage: "Hola! Quiero pedir una caja de asado para mi próxima juntada.",
  },
  {
    id: "parrillas-alquiler",
    href: "/parrillas/alquiler",
    eyebrow: "Alquiler",
    title: "Parrillas para tu evento",
    short: "Parrilla, entrega e instalación para cumpleaños, empresas o cualquier juntada.",
    priceFrom: "Desde ₲ 150.000/día",
    waMessage: "Hola! Quiero alquilar una parrilla para un evento.",
  },
  {
    id: "parrillas-venta",
    href: "/parrillas/venta",
    eyebrow: "Venta",
    title: "Parrillas propias",
    short: "Portátiles o de obra, para tener tu fuego siempre listo en casa.",
    priceFrom: "Desde ₲ 850.000",
    waMessage: "Hola! Quiero cotizar una parrilla para comprar.",
  },
  {
    id: "asador-privado",
    href: "/asador-privado",
    eyebrow: "Asador privado",
    title: "Un asador para tu evento",
    short: "Llevamos el asador, la carne y la parrilla. Vos ponés la gente.",
    priceFrom: "Desde ₲ 120.000/persona",
    waMessage: "Hola! Quiero contratar un asador privado para un evento.",
  },
];
