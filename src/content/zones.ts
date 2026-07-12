export interface Zone {
  name: string;
  slug: string;
  ring: "asuncion" | "primer-anillo" | "segundo-anillo";
}

export const zones: Zone[] = [
  { name: "Asunción", slug: "asuncion", ring: "asuncion" },
  { name: "San Lorenzo", slug: "san-lorenzo", ring: "primer-anillo" },
  { name: "Luque", slug: "luque", ring: "primer-anillo" },
  { name: "Lambaré", slug: "lambare", ring: "primer-anillo" },
  { name: "Fernando de la Mora", slug: "fernando-de-la-mora", ring: "primer-anillo" },
  { name: "Mariano Roque Alonso", slug: "mariano-roque-alonso", ring: "primer-anillo" },
  { name: "Capiatá", slug: "capiata", ring: "segundo-anillo" },
  { name: "Ñemby", slug: "nemby", ring: "segundo-anillo" },
  { name: "Villa Elisa", slug: "villa-elisa", ring: "segundo-anillo" },
  { name: "San Antonio", slug: "san-antonio", ring: "segundo-anillo" },
  { name: "Limpio", slug: "limpio", ring: "segundo-anillo" },
];

export const primaryZones = zones.filter((z) => z.ring !== "segundo-anillo");
export const extendedZones = zones.filter((z) => z.ring === "segundo-anillo");
