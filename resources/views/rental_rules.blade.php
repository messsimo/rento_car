<!-- Подключение шаблонизатора -->
@extends("layouts.app")

<!-- Динамическое название страницы -->
@section("title")
    Car Rent | Rental Rules
@endsection

<!-- Подключние секции -->
@section("rentRules")
    <!-- Блок навигации -->
    <div class="web-nav">
        <span>Main > Rental Rules</span>
    </div>

    <!-- Блок с правилами -->
    <div class="rules">
        <h1>Rental Agreement Rules</h1>
        <span>Renting a property can be an exciting and convenient way to find your next home or office space. However, understanding the rental rules and regulations is essential for a smooth and successful rental experience. Below are some key rental agreement rules to keep in mind:</span>

        <h2>Understanding the Lease Agreement</h2>
        <span>Before signing a lease agreement, carefully read through all the terms and conditions. A lease agreement is a legal contract between the landlord and the tenant, outlining the responsibilities of both parties. Make sure you understand the following:</span>
        <p><b>Lease Duration:</b> Confirm the length of the lease and the start and end dates.</p>
        <p><b>Rent Amount and Payment Terms:</b> Know the monthly rent amount, due date, and acceptable payment methods.</p>
        <p><b>Security Deposit:</b> Understand the security deposit amount and the conditions under which it will be returned.</p>

        <h2>Rent Payment and Late Fees</h2>
        <span>Timely payment of rent is crucial. Rent is typically due on the first day of each month unless stated otherwise in the lease agreement. Late payments can incur additional fees, so it is essential to:</span>
        <p><b>Set Reminders:</b> Use reminders or automated payments to ensure timely rent payments.</p>
        <p><b>Know the Grace Period:</b> Some leases offer a grace period, typically of 3-5 days, before late fees are applied.</p>
        <p><b>Communicate with Your Landlord:</b> If you anticipate being late with a payment, inform your landlord in advance.</p>

        <h2>Maintenance and Repairs</h2>
        <span>As a tenant, you are responsible for keeping the property clean and reporting any maintenance issues. Landlords are usually responsible for major repairs, but the lease agreement will outline specific responsibilities:</span>
        <p><b>Report Problems Promptly:</b> Notify your landlord of any repairs needed as soon as possible.</p>
        <p><b>Routine Maintenance:</b> Tenants are often required to handle minor maintenance tasks, such as changing light bulbs and keeping the premises clean.</p>

        <h2>Occupancy Limits and Subletting</h2>
        <span>Most rental agreements specify the maximum number of occupants allowed to live in the property. Subletting, or renting out the property to another person, is usually prohibited unless explicitly allowed in the lease agreement:</span>
        <p><b></b>Check Occupancy Rules:</b> Make sure you know the maximum number of occupants allowed.</p>
        <p><b>Ask for Permission:</b> If you need to sublet, always get written permission from your landlord.</p>

        <h2>Pets and Noise Restrictions</h2>
        <span>Some properties have strict rules regarding pets and noise levels to maintain a peaceful living environment:</span>
        <p><b>Pet Policies:</b> If pets are allowed, there may be breed or size restrictions and additional pet deposits.</p>
        <p><b>Noise Levels:</b> Be mindful of noise, especially during late hours, to avoid disturbances and complaints from neighbors.</p>

        <h2>Property Alterations</h2>
        <span>Making alterations to the property, such as painting walls or installing shelves, usually requires landlord approval:</span>
        <p><b>Get Written Consent:</b> Before making any changes, always obtain written consent from your landlord.</p>
        <p><b>Revert Changes:</b> Be prepared to restore the property to its original condition at the end of the lease.</p>

        <h2>Renewal and Termination</h2>
        <span>Understand the procedures for lease renewal and termination:</span>
        <p><b>Notice Period:</b> Leases often require a 30-60 day notice before moving out or renewing the lease.</p>
        <p><b>Breaking the Lease:</b> If you need to terminate the lease early, be aware of any penalties or fees.</p>

        <h2>Security Deposit Return</h2>
        <span>At the end of the lease, the security deposit is typically returned, minus any deductions for damages or unpaid rent:</span>
        <p><b>Conduct a Walkthrough:</b> Schedule a walkthrough with your landlord to inspect the property.</p>
        <p class="last-p"><b>Document Condition:</b> Take photos or videos of the property's condition to ensure a fair assessment.</p>

        <h3>Conclusion</h3>
        <span>Understanding and adhering to rental rules and regulations is key to maintaining a positive relationship with your landlord and ensuring a pleasant living experience. Always communicate openly, respect the property, and follow the terms outlined in your lease agreement. Happy renting!</span>
    </div> 
@endsection