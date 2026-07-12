export interface FaqItem {
  question: string;
  answer: string;
}

export const homeFaq: FaqItem[] = [
  {
    question: "¿Cómo hago un pedido?",
    answer:
      "Todo se coordina por WhatsApp. Nos escribís, te contamos las opciones y coordinamos entrega o servicio.",
  },
  {
    question: "¿En qué zonas entregan?",
    answer:
      "Cubrimos Asunción y Gran Asunción (San Lorenzo, Luque, Lambaré, Fernando de la Mora, Mariano Roque Alonso). Para otras zonas, consultá disponibilidad.",
  },
  {
    question: "¿Con cuánta anticipación tengo que pedir?",
    answer:
      "Para delivery de carne, con 24 horas alcanza. Para parrillas y asador privado, recomendamos coordinar con unos días de anticipación, sobre todo en fechas pico.",
  },
  {
    question: "¿Los precios incluyen entrega?",
    answer:
      "El delivery de carne es gratis en Asunción a partir de cierto monto; en Gran Asunción tiene un costo fijo. Coordinamos el detalle exacto por WhatsApp.",
  },
];
