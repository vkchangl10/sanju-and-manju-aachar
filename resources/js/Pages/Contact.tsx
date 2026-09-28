import { useState } from 'react'
import { usePage } from '@inertiajs/react'
import Shell from '@/Components/Shell'

interface Props {
  assets: { logo: string; banner: string; banner2: string }
  [key: string]: any
}

export default function Contact() {
  const { assets } = usePage<Props>().props
  const [submitted, setSubmitted] = useState(false)

  return (
    <Shell>
      <section className="space-y-10 lg:space-y-14">
        {/* Banner */}
        <div className="relative overflow-hidden rounded-3xl shadow-xl ring-1 ring-green/10">
          <img
            src={assets.banner}
            alt="Contact — Sanjumanju artisan workspace hero banner"
            className="w-full max-h-[340px] sm:max-h-[440px] lg:max-h-[500px] object-cover"
            sizes="(max-width: 412px) 100vw, (max-width: 1024px) 92vw, 1200px"
            loading="eager"
            decoding="async"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-green/85 via-green/30 to-transparent flex items-end p-6 sm:p-10">
            <div className="text-ivory space-y-2 max-w-2xl">
              <span className="inline-block px-3 py-1 bg-turmeric text-green font-semibold text-xs tracking-wider uppercase rounded-full">
                Get in Touch
              </span>
              <h2 className="font-serif text-2xl sm:text-4xl font-bold leading-tight">
                We Love Hearing From Pickle Enthusiasts &amp; Partners
              </h2>
            </div>
          </div>
        </div>

        {/* Header */}
        <div className="max-w-3xl mx-auto space-y-4 text-center">
          <h1 className="font-serif text-3xl sm:text-4xl md:text-5xl font-bold text-green">Contact Us</h1>
          <p className="text-base sm:text-lg text-green/80 leading-relaxed">
            Wholesale enquiries, bulk gifting, custom orders, or feedback on our recipes — we respond to every query personally.
          </p>
        </div>

        {/* Secondary Banner */}
        <div className="overflow-hidden rounded-2xl shadow-lg ring-1 ring-green/5">
          <img
            src={assets.banner2}
            alt="Contact — Sanjumanju storefront featured banner"
            className="w-full max-h-[200px] sm:max-h-[260px] object-cover"
            sizes="(max-width: 412px) 100vw, 960px"
            loading="lazy"
            decoding="async"
          />
        </div>

        {/* Info Grid + Form Container */}
        <div className="grid lg:grid-cols-5 gap-8 max-w-5xl mx-auto items-start">
          {/* Info Side */}
          <div className="lg:col-span-2 space-y-6">
            <div className="bg-white/70 backdrop-blur rounded-3xl p-6 border border-turmeric/20 shadow-md space-y-4">
              <h3 className="font-serif text-xl font-bold text-green">Kitchen &amp; Storefront</h3>
              <div className="text-sm text-green/80 space-y-2">
                <p><strong>Address:</strong> Sanjumanju Heritage Kitchen, Maheshwari Lane, South India</p>
                <p><strong>WhatsApp:</strong> +91 90000 00000</p>
                <p><strong>Email:</strong> orders@sanjumanju.com</p>
                <p><strong>Hours:</strong> Mon - Sat: 9:00 AM - 7:00 PM IST</p>
              </div>
            </div>

            <div className="bg-turmeric/10 rounded-3xl p-6 border border-turmeric/25 space-y-2">
              <h4 className="font-serif text-lg font-bold text-green">Bulk &amp; Corporate Queries</h4>
              <p className="text-xs sm:text-sm text-green/75 leading-relaxed">
                Planning wedding return gifts or festive corporate boxes? Contact us 2-3 weeks in advance for custom labels and jar sizes.
              </p>
            </div>
          </div>

          {/* Form Side */}
          <div className="lg:col-span-3">
            {submitted ? (
              <div className="bg-green text-ivory rounded-3xl p-8 shadow-xl text-center space-y-4">
                <div className="w-12 h-12 bg-turmeric text-green rounded-full flex items-center justify-center mx-auto text-2xl font-bold">
                  ✓
                </div>
                <h3 className="font-serif text-2xl font-bold">Redirecting to WhatsApp</h3>
                <p className="text-ivory/80 text-sm leading-relaxed">
                  Your message draft has been prepared and opened in WhatsApp. If it didn&apos;t open automatically, click the button below.
                </p>
                <button
                  type="button"
                  onClick={() => setSubmitted(false)}
                  className="px-6 py-2.5 bg-turmeric text-green font-semibold rounded-xl text-sm hover:bg-turmeric/90 transition-colors"
                >
                  Send Another Message
                </button>
              </div>
            ) : (
              <form
                onSubmit={(e) => {
                  e.preventDefault()
                  const form = e.currentTarget
                  const data = new FormData(form)
                  const name = String(data.get('name') || '').trim()
                  const email = String(data.get('email') || '').trim()
                  const message = String(data.get('message') || '').trim()
                  if (!name || !email || !message) return
                  setSubmitted(true)
                  const body = `Hi Sanjumanju,%0A%0AName: ${encodeURIComponent(name)}%0AEmail: ${encodeURIComponent(email)}%0A%0AMessage: ${encodeURIComponent(message)}`
                  window.open(`https://wa.me/910000000000?text=${body}`, '_blank', 'noopener')
                }}
                className="space-y-4 bg-white/70 backdrop-blur rounded-3xl p-6 sm:p-8 shadow-lg border border-turmeric/20"
              >
                <label className="block space-y-1.5">
                  <span className="text-sm font-semibold text-green">Your Full Name</span>
                  <input
                    type="text"
                    name="name"
                    required
                    className="w-full rounded-2xl border border-green/15 bg-white px-4 py-3 text-green focus:outline-none focus:ring-2 focus:ring-turmeric/40 text-sm"
                    placeholder="Enter your name"
                  />
                </label>
                <label className="block space-y-1.5">
                  <span className="text-sm font-semibold text-green">Email Address</span>
                  <input
                    type="email"
                    name="email"
                    required
                    className="w-full rounded-2xl border border-green/15 bg-white px-4 py-3 text-green focus:outline-none focus:ring-2 focus:ring-turmeric/40 text-sm"
                    placeholder="you@example.com"
                  />
                </label>
                <label className="block space-y-1.5">
                  <span className="text-sm font-semibold text-green">Your Message</span>
                  <textarea
                    name="message"
                    rows={5}
                    required
                    className="w-full rounded-2xl border border-green/15 bg-white px-4 py-3 text-green focus:outline-none focus:ring-2 focus:ring-turmeric/40 text-sm"
                    placeholder="Tell us about your order, gifting requirement, or recipe question…"
                  />
                </label>
                <button
                  type="submit"
                  className="w-full rounded-2xl bg-green text-ivory font-semibold py-3.5 hover:bg-green/90 transition-colors shadow-md text-base"
                >
                  Send Message via WhatsApp
                </button>
              </form>
            )}
          </div>
        </div>
      </section>
    </Shell>
  )
}

