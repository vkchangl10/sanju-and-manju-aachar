import { usePage } from '@inertiajs/react'
import Shell from '@/Components/Shell'

interface Props {
  assets: { logo: string; banner: string; banner2: string }
  [key: string]: any
}

const GIFT_TIERS = [
  { t: 'Festive Box', d: '6 assorted jars (250g each), hand-tied with turmeric silk ribbon. Perfect for Diwali, Holi, and Raksha Bandhan.', price: '₹1,499' },
  { t: 'Wedding Favours', d: 'Miniature 100g ceramic jars custom-labelled with wedding couple initials for return gifts and baraat welcome hampers.', price: 'Custom Quote' },
  { t: 'Housewarming Trio', d: 'A trio jar set (Aam, Nimbu, Lahsun) presented in a wooden crate with a handwritten gift card and brass jar opener.', price: '₹999' },
  { t: 'Corporate Gifting', d: 'Bulk branded hampers with custom corporate logos, ribbon colors, and personalised holiday appreciation notes.', price: 'Bulk Pricing' },
  { t: 'Family Crate', d: 'Full-range ten-jar wooden heirloom crate featuring all seasonal & flagship recipes — our flagship nation-wide gift.', price: '₹2,799' },
]

export default function Gifting() {
  const { assets } = usePage<Props>().props

  return (
    <Shell>
      <section className="space-y-10 lg:space-y-14">
        {/* Banner */}
        <div className="relative overflow-hidden rounded-3xl shadow-xl ring-1 ring-green/10">
          <img
            src={assets.banner}
            alt="Gifting — Sanjumanju hamper hero banner"
            className="w-full max-h-[340px] sm:max-h-[440px] lg:max-h-[500px] object-cover"
            sizes="(max-width: 412px) 100vw, (max-width: 1024px) 92vw, 1200px"
            loading="eager"
            decoding="async"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-green/85 via-green/30 to-transparent flex items-end p-6 sm:p-10">
            <div className="text-ivory space-y-2 max-w-2xl">
              <span className="inline-block px-3 py-1 bg-turmeric text-green font-semibold text-xs tracking-wider uppercase rounded-full">
                Artisanal Hampers
              </span>
              <h2 className="font-serif text-2xl sm:text-4xl font-bold leading-tight">
                Share the Taste of Heritage with Your Loved Ones
              </h2>
            </div>
          </div>
        </div>

        {/* Intro */}
        <div className="max-w-3xl mx-auto space-y-4 text-center">
          <h1 className="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-green">Gifting &amp; Hampers</h1>
          <p className="text-base sm:text-lg text-green/80 leading-relaxed">
            Thoughtful, hand-packed gift boxes for festivals, weddings, and corporate celebrations. Custom labels and nationwide delivery available.
          </p>
        </div>

        {/* Secondary Banner */}
        <div className="overflow-hidden rounded-2xl shadow-lg ring-1 ring-green/5">
          <img
            src={assets.banner2}
            alt="Gifting — Sanjumanju festive hamper featured banner"
            className="w-full max-h-[200px] sm:max-h-[260px] object-cover"
            sizes="(max-width: 412px) 100vw, 960px"
            loading="lazy"
            decoding="async"
          />
        </div>

        {/* Gift Tiers Grid */}
        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
          {GIFT_TIERS.map((g) => {
            const waMsg = encodeURIComponent(`Hi Sanjumanju! I am interested in inquiring about the "${g.t}" gifting hamper. Please share details and pricing.`)
            return (
              <div key={g.t} className="flex flex-col justify-between rounded-3xl border border-turmeric/20 bg-white/70 backdrop-blur p-6 shadow-md hover:shadow-xl transition-all hover:-translate-y-1 duration-200">
                <div className="space-y-3">
                  <div className="flex items-center justify-between border-b border-turmeric/15 pb-3">
                    <h3 className="font-serif text-xl font-bold text-green">{g.t}</h3>
                    <span className="text-sm font-semibold text-turmeric bg-turmeric/10 px-3 py-1 rounded-full">{g.price}</span>
                  </div>
                  <p className="text-green/75 text-sm sm:text-base leading-relaxed">{g.d}</p>
                </div>
                <div className="pt-5 mt-4 border-t border-turmeric/10">
                  <a
                    href={`https://wa.me/910000000000?text=${waMsg}`}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-green text-ivory font-semibold py-2.5 px-4 hover:bg-green/90 transition-colors text-sm"
                  >
                    Inquire for Gifting
                  </a>
                </div>
              </div>
            )
          })}
        </div>
      </section>
    </Shell>
  )
}

