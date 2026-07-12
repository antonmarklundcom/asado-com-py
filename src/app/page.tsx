import Link from "next/link";
import { Header } from "@/components/Header";
import { Footer } from "@/components/Footer";
import { site } from "@/content/site";
import { services } from "@/content/services";
import { homeFaq } from "@/content/faq";
import { heroSections } from "@/content/hero";
import { waLink } from "@/lib/whatsapp";

export default function Home() {
  const heroCta = heroSections[heroSections.length - 1];

  return (
    <>
      <Header />

      {/*
        Hero placeholder — the scroll-world cinematic flight (5 scenes,
        architecture A) is built in Phase 2. This section carries the same
        copy and carbon/ember palette so the swap-in is visual-only, and
        server-renders real text/links for SEO/crawlers from day one
        (see ASADO-PLAN.md §5.2, §4).
      */}
      <section className="flex min-h-screen flex-col items-center justify-center bg-gradient-to-b from-carbon via-corte/30 to-carbon px-6 text-center">
        <p className="text-sm uppercase tracking-[0.3em] text-fuego">{heroCta.eyebrow}</p>
        <h1 className="mt-4 max-w-3xl font-display text-4xl font-semibold leading-tight text-crema sm:text-6xl">
          {heroCta.title}
        </h1>
        <p className="mt-4 max-w-xl text-lg text-crema/80">{heroCta.body}</p>
        <a
          href={waLink("Hola! Quiero pedir por WhatsApp.")}
          target="_blank"
          rel="noopener noreferrer"
          className="mt-8 rounded-full bg-whatsapp px-8 py-4 text-base font-medium text-white transition-transform hover:scale-105"
        >
          Pedí por WhatsApp
        </a>
        <div className="mt-6 flex flex-wrap justify-center gap-2 text-xs text-crema/60">
          {heroCta.tags.map((tag) => (
            <span key={tag} className="rounded-full border border-crema/20 px-3 py-1">
              {tag}
            </span>
          ))}
        </div>
      </section>

      <main className="flex-1">
        {/* Services bento */}
        <section className="mx-auto max-w-6xl px-6 py-20 sm:px-10">
          <h2 className="font-display text-3xl font-semibold text-crema sm:text-4xl">
            Todo para tu asado
          </h2>
          <div className="mt-10 grid gap-6 sm:grid-cols-2">
            {services.map((s) => (
              <Link
                key={s.id}
                href={s.href}
                className="group rounded-2xl border border-crema/10 bg-crema/5 p-6 transition-colors hover:border-fuego/50 hover:bg-crema/10"
              >
                <p className="text-xs uppercase tracking-widest text-fuego">{s.eyebrow}</p>
                <h3 className="mt-2 font-display text-xl font-semibold text-crema">{s.title}</h3>
                <p className="mt-2 text-sm text-crema/70">{s.short}</p>
                <p className="mt-4 text-sm font-medium text-brasa">{s.priceFrom}</p>
              </Link>
            ))}
          </div>
        </section>

        {/* How it works */}
        <section className="border-y border-crema/10 bg-crema/[0.03] px-6 py-20 sm:px-10">
          <div className="mx-auto max-w-4xl text-center">
            <h2 className="font-display text-3xl font-semibold text-crema">Así de fácil</h2>
            <div className="mt-10 grid gap-8 sm:grid-cols-3">
              {[
                { step: "1", title: "Elegí", text: "Delivery, parrilla o asador privado." },
                { step: "2", title: "Escribinos", text: "Coordinamos todo por WhatsApp." },
                { step: "3", title: "Disfrutá", text: "Nosotros nos encargamos del resto." },
              ].map((item) => (
                <div key={item.step}>
                  <div className="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-brasa font-display text-lg font-semibold text-crema">
                    {item.step}
                  </div>
                  <h3 className="mt-4 font-display text-lg font-semibold text-crema">{item.title}</h3>
                  <p className="mt-2 text-sm text-crema/70">{item.text}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* Coverage */}
        <section className="mx-auto max-w-6xl px-6 py-20 sm:px-10">
          <h2 className="font-display text-3xl font-semibold text-crema">Zona de cobertura</h2>
          <p className="mt-3 max-w-2xl text-crema/70">
            Entregamos en Asunción y Gran Asunción. ¿Tu zona no está en la lista? Consultanos por
            WhatsApp.
          </p>
          <Link
            href="/zonas-de-cobertura"
            className="mt-6 inline-block rounded-full border border-crema/20 px-5 py-2 text-sm text-crema transition-colors hover:border-fuego hover:text-fuego"
          >
            Ver zonas de cobertura
          </Link>
        </section>

        {/* FAQ */}
        <section className="border-t border-crema/10 bg-crema/[0.03] px-6 py-20 sm:px-10">
          <div className="mx-auto max-w-3xl">
            <h2 className="font-display text-3xl font-semibold text-crema">Preguntas frecuentes</h2>
            <div className="mt-8 space-y-6">
              {homeFaq.map((item) => (
                <div key={item.question}>
                  <h3 className="font-medium text-crema">{item.question}</h3>
                  <p className="mt-1 text-sm text-crema/70">{item.answer}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* Final CTA */}
        <section className="px-6 py-20 text-center sm:px-10">
          <h2 className="font-display text-3xl font-semibold text-crema sm:text-4xl">
            {site.tagline}
          </h2>
          <a
            href={waLink("Hola! Quiero hacer un pedido.")}
            target="_blank"
            rel="noopener noreferrer"
            className="mt-6 inline-block rounded-full bg-whatsapp px-8 py-4 text-base font-medium text-white transition-transform hover:scale-105"
          >
            Escribinos por WhatsApp
          </a>
        </section>
      </main>

      <Footer />
    </>
  );
}
